<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Location;
use App\Core\Models\Partner;
use App\Core\Models\Posts;
use App\Core\Models\Setting;
use App\Core\Models\Widget;

class HomepageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first_post = Posts::query()->where('status', Posts::STATUS_PUBLISH)->take(1)->orderBy('id', 'DESC')->first();
        $list_posts = Posts::query()->where('status', Posts::STATUS_PUBLISH)->take(13)->skip(1)->orderBy('id', 'DESC')->get();
        $hot_locations = Location::query()->where('hot_location', 1)->take(6)->orderBy('id', 'DESC')->get();
        $partners = Partner::query()->orderBy('id', 'DESC')->get();
        $setting = Setting::where('key', '=', 'footer_info')->first();
        $widget_trend = Widget::select('content')->where('key', 'widget.homepage.trend')->first();
        $widget_top_banner = Widget::select('content')->where('key', 'widget.homepage.top_banner')->first();
        $widget_right_banner = Widget::select('content')->where('key', 'widget.homepage.right_banner')->first();
        $widget_middle_banner = Widget::select('content')->where('key', 'widget.homepage.middle_banner')->first();
        $metaData['meta_title'] = $setting->meta_title;
        $metaData['meta_keyword'] = $setting->meta_keyword;
        $metaData['meta_description'] = $setting->meta_description;
        $metaData['meta_image'] = $setting->meta_image;
        return view('homepage.index', compact('first_post', 'list_posts', 'hot_locations', 'partners', 'widget_trend', 'widget_top_banner', 'widget_right_banner', 'widget_middle_banner', 'metaData'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function security()
    {
        return view('homepage.security');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rule()
    {
        return view('homepage.rule');
    }
}
