<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogValidationRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class AdminBlogController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);

        foreach ($blogs as $blog) {
            $blog->author = User::find($blog->user_id)->name;
        }

        return view('admin.blogs.index', [
            'blogs' => $blogs,
            'title' => 'Admin / Blog'
        ]);
    }

    /**
     * @return Response
     */
    public function create()
    {
        $categories = Category::all()->where('status', 10);

        return view('admin.blogs.create', [
            'categories' => $categories,
            'title' => 'Admin / Create new blog'
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

        return redirect(route('admin_blog.index'));
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

        return view('admin.blogs.show', [
            'blog' => $blog,
            'title' => 'Admin / Blog ' . $blog->id
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

        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => $categories,
            'title' => 'Admin / Edit blog ' . $id
        ]);
    }

    /**
     * @param BlogValidationRequest $request
     * @param int $id
     * @return Response
     */
    public function update(BlogValidationRequest $request, $id)
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

        return redirect(route('admin_blog.show', $id));
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

        return redirect(route('admin_blog.index'));
    }
}
