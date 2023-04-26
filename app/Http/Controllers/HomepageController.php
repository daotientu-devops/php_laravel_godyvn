<?php

namespace App\Http\Controllers;

use App\Core\Models\Location;
use App\Core\Models\Partner;
use App\Core\Models\Posts;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

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
}
