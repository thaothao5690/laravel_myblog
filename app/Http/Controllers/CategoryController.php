<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

/**
 *
 */
class CategoryController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $categories = Category::all()->where('status', 10);

        return view('categories.index', [
            'categories' => $categories,
            'title' => 'All categories'
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id)
    {
        $blogs = Blog::all()->where('category_id', $id)->where('status', 10);
        $category = Category::find($id)->name;

        return view('categories.show', [
            'blogs' => $blogs,
            'title' => '#' . $category
        ]);
    }
}
