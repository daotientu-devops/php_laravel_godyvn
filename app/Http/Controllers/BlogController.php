<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Business\CategoryBusiness;
use App\Core\Business\PostsBusiness;
use App\Core\Business\UploadFileBusiness;
use App\Core\Connection\ElasticsearchServer;
use App\Core\Enums\CommonEnum;
use App\Core\Models\Customer;
use App\Core\Models\PasswordReset;
use App\Core\Repositories\Redis\CategoryRedis;
use App\Core\Repositories\Elasticsearch\PostsElasticsearch;
use Illuminate\Http\Request;
use App\Core\Models\Posts;
use App\Core\Models\Category;
use App\Core\Models\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Core\Enums\ElasticsearchEnum;
use App\Helpers\Activity;

class BlogController extends Controller
{

    public $limit;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($slug)
    {
        $blog = DB::table('posts')->select('title', 'excerpt', 'content', 'author_name', 'published_at', 'meta_title', 'meta_keyword', 'meta_description')->where('slug', str_replace('.html', '', $slug))->first();
        if (empty($blog)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $blog->meta_title;
        $metaData['meta_keyword'] = $blog->meta_keyword;
        $metaData['meta_description'] = $blog->meta_description;
        return view('blog.detail', compact('blog', 'metaData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        $categories = Category::select('id', 'name', 'parent_id')->where('is_actived', 1)->get();
        return view('posts.create', compact('type', 'categories'));
    }

    function sanitize($name)
    {
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => ''
        );
        // Some URL was encode, double first
        $name = urldecode($name);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $name));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function note()
    {
        return view('blog.note');
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postNote(Request $request)
    {
        try {
            $customerId = 0;
            if (isset($_COOKIE['travel_user_info'])) {
                $userData = json_decode($_COOKIE['travel_user_info'], true);
                $user = PasswordReset::select('email')->where('token', $userData['token'])->first();
                if ($user) {
                    $customer = Customer::select('id')->where('email', $user->email)->first();
                    if ($customer) {
                        $customerId = $customer->id;
                    }
                }
            }
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('content');
            $plain_text = strip_tags($content);
            $type = 'text';
            /* Start thumbnail url */
            $thumbnail_url = $request->thumbnail_url;
            $thumbnail_name = '';
            if ($thumbnail_url) {
                $thumbnail_name = $thumbnail_url->getClientOriginalName();
            }
            /* End thumbnail url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $this->validate($request, [
                'title' => 'required',
                'excerpt' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt') != null ? $request->get('excerpt') : '',
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'author_name' => $request->get('author_name') != null ? $request->get('author_name') : '',
                    'user_id' => $request->get('user_id') != null ? $request->get('user_id') : 0,
                    'customer_id' => $customerId,
                    'status' => 'draft', // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => 'blog',
                    'category_id' => CategoryBusiness::CATEGORY_ID_BLOG_DULICH, // blog du lịch
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();
                return redirect()->back()->with('message', 'Tạo mới bài viết ' . $title . ' thành công. Bài viết của bạn sẽ được xét duyệt trước khi xuất bản');
            }
        } catch (\Exception $exception) {
            //print_r($exception->getMessage());die();
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function photo()
    {
        return view('blog.photo');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postPhoto(Request $request)
    {
        try {
            $customerId = 0;
            if (isset($_COOKIE['travel_user_info'])) {
                $userData = json_decode($_COOKIE['travel_user_info'], true);
                $user = PasswordReset::select('email')->where('token', $userData['token'])->first();
                if ($user) {
                    $customer = Customer::select('id')->where('email', $user->email)->first();
                    if ($customer) {
                        $customerId = $customer->id;
                    }
                }
            }
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('excerpt');
            $plain_text = strip_tags($content);
            $type = 'photo';
            /* Start thumbnail url */
            $thumbnail_url = $request->thumbnail_url;
            $thumbnail_name = '';
            if ($thumbnail_url) {
                $thumbnail_name = $thumbnail_url->getClientOriginalName();
            }
            /* End thumbnail url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $this->validate($request, [
                'title' => 'required',
                'excerpt' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $album = '';
                $albums = $request->album;
                if (!empty($albums)) {
                    foreach ($albums as $album) {
                        $album_name = $album->getClientOriginalName();
                        if ($album) {
                            UploadFileBusiness::uploadFileToFolder($album);
                        }
                        $album .= $album_name . ',';
                    }
                }
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt') != null ? $request->get('excerpt') : '',
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'album' => $album,
                    'author_name' => $request->get('author_name') != null ? $request->get('author_name') : '',
                    'user_id' => $request->get('user_id') != null ? $request->get('user_id') : 0,
                    'customer_id' => $customerId,
                    'status' => 'draft', // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => 'blog',
                    'category_id' => CategoryBusiness::CATEGORY_ID_BLOG_DULICH, // blog du lịch
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null,
                    'has_tags' => $request->get('tags')
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();
                return redirect()->back()->with('message', 'Tạo mới bài viết ' . $title . ' thành công. Bài viết của bạn sẽ được xét duyệt trước khi xuất bản');
            }
        } catch (\Exception $exception) {
            //print_r($exception->getMessage());die();
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function collaborator()
    {
        return view('blog.collaborator');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCollaborator(Request $request)
    {
        try {
            $customerId = 0;
            if (isset($_COOKIE['travel_user_info'])) {
                $userData = json_decode($_COOKIE['travel_user_info'], true);
                $user = PasswordReset::select('email')->where('token', $userData['token'])->first();
                if ($user) {
                    $customer = Customer::select('id')->where('email', $user->email)->first();
                    if ($customer) {
                        $customerId = $customer->id;
                    }
                }
            }
            $title = $request->get('title');
            $slug = $this->sanitize($title);
            $content = $request->get('excerpt');
            $plain_text = strip_tags($content);
            $type = 'collaborator';
            /* Start thumbnail url */
            $thumbnail_url = $request->thumbnail_url;
            $thumbnail_name = '';
            if ($thumbnail_url) {
                $thumbnail_name = $thumbnail_url->getClientOriginalName();
            }
            /* End thumbnail url */
            $yearDir = date('Y');
            $monthDir = date('m');
            $dayDir = date('d');
            $this->validate($request, [
                'title' => 'required',
                'excerpt' => 'required'
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Posts::where('slug', '=', $slug)->exists()) {
                return redirect()->back()->with('error', 'Bài viết ' . $title . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $album = '';
                $albums = $request->album;
                if (!empty($albums)) {
                    foreach ($albums as $album) {
                        $album_name = $album->getClientOriginalName();
                        if ($album) {
                            UploadFileBusiness::uploadFileToFolder($album);
                        }
                        $album .= $album_name . ',';
                    }
                }
                $post = new Posts([
                    'title' => $title,
                    'slug' => $slug,
                    'excerpt' => $request->get('excerpt') != null ? $request->get('excerpt') : '',
                    'plain_text' => $plain_text,
                    'content' => $content,
                    'tips' => $request->get('tips'),
                    'album' => $album,
                    'continent' => $request->get('continent'),
                    'country' => $request->get('country'),
                    'province' => $request->get('province'),
                    'email' => $request->get('email'),
                    'telephone' => $request->get('telephone'),
                    'latitude' => $request->get('latitude'),
                    'longitude' => $request->get('longitude'),
                    'website' => $request->get('website'),
                    'address' => $request->get('address'),
                    'open_time' => $request->get('open_time'),
                    'ticket_price' => $request->get('ticket_price'),
                    'original_url' => $request->get('original_url'),
                    'author_name' => $request->get('author_name') != null ? $request->get('author_name') : '',
                    'user_id' => $request->get('user_id') != null ? $request->get('user_id') : 0,
                    'customer_id' => $customerId,
                    'status' => 'draft', // Chế độ xem trước là bài nháp
                    'published_at' => $request->get('published_at') == null ? strtotime(date('Y-m-d H:i:s')) : strtotime($request->get('published_at')),
                    'post_type' => $type,
                    'category_type' => 'blog',
                    'category_id' => CategoryBusiness::CATEGORY_ID_BLOG_DULICH, // blog du lịch
                    'thumbnail_url' => ($thumbnail_url) ? '/' . $yearDir . '/' . $monthDir . '/' . $dayDir . '/' . $thumbnail_name : null,
                ]);
                if ($thumbnail_url) {
                    UploadFileBusiness::uploadFileToFolder($thumbnail_url);
                }
                $post->save();
                return redirect()->back()->with('message', 'Tạo mới bài viết ' . $title . ' thành công. Bài viết của bạn sẽ được xét duyệt trước khi xuất bản');
            }
        } catch (\Exception $exception) {
            //print_r($exception->getMessage());die();
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
