<?php

namespace App\Http\Controllers;

use App\Core\Controllers\Controller;
use App\Core\Models\Location;
use App\Core\Models\Partner;
use App\Core\Models\Posts;

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
        return view('homepage.index', compact('first_post', 'list_posts', 'hot_locations', 'partners'));
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
