<?php

namespace App\Http\Controllers;

use App\Core\Models\Location;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first_post = Posts::query()->take(1)->orderBy('id', 'DESC')->first();
        $hot_locations = Location::query()->where('hot_location', 1)->take(6)->orderBy('id', 'DESC')->get();
        return view('homepage.index', compact('first_post', 'hot_locations'));
    }
}
