<?php

namespace App\Http\Controllers;

use App\Models\Blog;

/**
 *
 */
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::where('status', 10)->orderBy('id', 'DESC')->take(3)->get();

        return view('home', [
            'blogs' => $blogs,
            'title' => 'Home',
        ]);
    }
}
