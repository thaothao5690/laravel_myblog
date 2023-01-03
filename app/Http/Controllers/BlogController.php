<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\BlogValidationRequest;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class BlogController extends BaseController
{
    /**
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->where('status', 10)->paginate(6);

        return view('blogs.index', [
            'title' => 'myBLOG - All blogs',
            'blogs' => $blogs
        ]);
    }

    /**
     * @return Response
     */
    public function create()
    {
        $categories = Category::all()->where('status', 10);

        return view('blogs.create', [
            'categories' => $categories,
            'title' => 'Create new blog',
        ]);
    }

    /**
     * @param BlogValidationRequest $request
     * @return Response
     */
    public function store(BlogValidationRequest $request)
    {
        $request->old('title', 'description', 'content', 'status', 'category');

        $image_name = 'image' . time() . '-' . $request->image->getClientOriginalName();

        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'image' => $image_name
        ]);

        if ($blog->save()) {
            $request->image->move(public_path('images/uploads'), $image_name);
            session()->flash('message', 'Created successfully!');
            Session::flash('alert-class', 'alert-success');
        }

        return redirect(route('blog.index'));
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id)
    {
        $blog = Blog::find($id);
        $blog->author = User::find($blog->user_id)->name;
        $blog->category_name = Category::find($blog->category_id)->name;

        return view('blogs.show', [
            'blog' => $blog,
            'title' => $blog->title
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function edit(int $id)
    {
        $blog = Blog::find($id);
        $categories = Category::all()->where('status', 10);

        return view('blogs.edit', [
            'blog' => $blog,
            'categories' => $categories,
            'title' => 'Update blog',
        ]);
    }

    /**
     * @param BlogValidationRequest $request
     * @param int $id
     *
     * @return Response
     */
    public function update(BlogValidationRequest $request, int $id)
    {
        if ($request->hasFile('image')) {
            $image_name = 'image' . time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/uploads'), $image_name);
        } else {
            $image = Blog::find($id)->image;
        }

        Blog::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'status' => $request->input('status'),
                'category_id' => $request->input('category'),
                'image' => $request->hasFile('image') ? $image_name : $image
            ]);

        session()->flash('message', 'Updated successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('blog.show', $id));
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function destroy(int $id)
    {
        $blog = Blog::find($id);
        $blog->status = 0;
        $blog->save();

        session()->flash('message', 'Deleted successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('blog.user'));
    }

    /**
     * @return Response
     */
    public function user()
    {
        $blogs = Blog::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->whereIn('status', [-1, 1, 10])->paginate(6);

        return view('blogs.user', [
            'title' => 'Your blog',
            'blogs' => $blogs,
        ]);
    }

    /**
     * @param $id
     * @return Response
     */
    public function author($id)
    {
        $blogs = Blog::all()->where('user_id', $id)->where('status', 10);
        $author = User::Find($id)->name;

        return view('blogs.author', [
            'blogs' => $blogs,
            'author' => $author,
            'title' => '#' . $author
        ]);
    }
}
