<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Location;
use Illuminate\Http\Request;
use App\Helpers\Activity;

class LocationController extends Controller
{

    public $limit;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->limit = config()->get('constants.LIMIT_DATA_PAGINATE');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('destination.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($continent, $country, $city = '')
    {
        $location = Location::where('share_url', '/' . $continent . '/' . $country . '/' . $city)->orderBy('id', 'DESC')->first();
        if (empty($location)) {
            return redirect('/');
        }
        $metaData['meta_title'] = $location->meta_title;
        $metaData['meta_keyword'] = $location->meta_keyword;
        $metaData['meta_description'] = $location->meta_description;
        return view('location.detail', compact('location', 'metaData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        try {
            $this->validate($request, [
                'name' => 'required',
                'content' => 'required',
            ]);
            // Not ok thì redirect với thông báo post đã tồn tại
            if (Location::where('name', '=', $name)->exists()) {
                return redirect()->back()->with('error', 'Điểm đến ' . $name . ' đã tồn tại');
            } else {
                // TH tạo mới mẫu
                $location = new Location([
                    'name' => $name,
                    'slug' => $this->sanitize($name),
                    'continent' => $request->get('continent'),
                    'country' => $request->get('country'),
                    'city' => $request->get('city'),
                    'content' => $request->get('content'),
                    'user_id' => auth()->user()->id,
                    'meta_title' => $request->get('meta_title'),
                    'meta_keyword' => $request->get('meta_keyword'),
                    'meta_description' => $request->get('meta_description')
                ]);
                $location->save();
                Activity::addLog('Tạo mới điểm đến', 'Tài khoản ' . auth()->user()->email . ' tạo mới điểm đến ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/locations/edit/' . $location->id)->with('message', 'Tạo mới điểm đến ' . $name . ' thành công');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = 'edit';
        $location = Location::find($id);
        return view('admin.location.form', compact('action', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        try {
            $this->validate($request, [
                'name' => 'required',
                'content' => 'required'
            ]);
            $location = Location::find($id);
            // Not ok thì redirect với thông báo post không tồn tại
            if (Location::where('id', '=', $id)->exists()) {
                $location->name = $name;
                $location->slug = $this->sanitize($name);
                $location->continent = $request->get('continent');
                $location->country = $request->get('country');
                $location->city = $request->get('city');
                $location->content = $request->get('content');
                $location->user_id = $request->get('user_id');
                $location->meta_title = $request->get('meta_title');
                $location->meta_keyword = $request->get('meta_keyword');
                $location->meta_description = $request->get('meta_description');
                $location->save();

                Activity::addLog('Sửa điểm đến', 'Tài khoản ' . auth()->user()->email . ' sửa điểm đến ' . $name . ' vào lúc ' . date('H:i A') . ' ngày ' . date('d/m/Y'));
                return redirect('cms/locations/edit/' . $location->id)->with('message', 'Sửa điểm đến ' . $name . ' thành công');
            } else {
                return redirect()->back()->with('error', 'Điểm đến ' . $location->name . ' không tồn tại');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $location = Location::find($id);
            $location->delete();
            return redirect('cms/locations')->with('message', 'Xóa điểm đến ' . $location->name . ' thành công');
        } catch (\Exception $exception) {
            return redirect('cms/locations')->with('error', 'Có lỗi xảy ra: ' . $exception->getMessage());
        }
    }
}
