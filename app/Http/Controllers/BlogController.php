<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = array(
            array('blogs' => array(
                'id' => 1,
                'name' => 'blog 1'
            )),
            array('blogs' => array(
                'id' => 2,
                'name' => 'blog 2'
            ))
        );

        $title = 'Welcome to MyBlog';

        return view('blogs.index', [
            'title' => $title,
            'blogs' => $blogs
        ]);
    }

    public function view($id)
    {
        $blogs = [
            '1' => 'Blog 1',
            '2' => 'Blog 2'
        ];

        $title = $blogs[$id];

        return view('blogs.detail', [
            'blog' => $blogs[$id] ?? 'Can\'t find blog',
            'title' => $title
        ]);
    }
}
