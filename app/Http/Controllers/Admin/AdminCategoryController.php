<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryValidationRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

/**
 *
 */
class AdminCategoryController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.categories.index', [
            'categories' => $categories,
            'title' => 'Admin / Category'
        ]);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('admin.categories.create')->with('title', 'Admin / Create category');
    }

    /**
     * @param CategoryValidationRequest $request
     * @return Response
     */
    public function store(CategoryValidationRequest $request)
    {
        $request->old('name', 'status');
        $image_name = 'image' . time() . '-' . $request->image->getClientOriginalName();
        $category = Category::create([
            'name' => $request->name,
            'status' => $request->status,
            'image' => $image_name
        ]);

        if ($category->save()) {
            $request->image->move(public_path('images/uploads'), $image_name);
            session()->flash('message', 'Created successfully!');
            Session::flash('alert-class', 'alert-success');
        }

        return redirect(route('admin_category.index'));
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function show(int $id)
    {
        $category = Category::find($id);

        return view('admin.categories.show', [
            'category' => $category,
            'title' => 'Admin / Category ' . $id
        ]);
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function edit(int $id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', [
            'category' => $category,
            'title' => 'Admin / Edit category ' . $id
        ]);
    }

    /**
     * @param CategoryValidationRequest $request
     * @param int $id
     *
     * @return Response
     */
    public function update(CategoryValidationRequest $request, int $id)
    {
        if ($request->hasFile('image')) {
            $image_name = 'image' . time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/uploads'), $image_name);
        } else {
            $image = Category::find($id)->image;
        }

        Category::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'status' => $request->input('status'),
                'image' => $request->hasFile('image') ? $image_name : $image
            ]);

        session()->flash('message', 'Updated successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('admin_category.show', $id));
    }

    /**
     * @param int $id
     *
     * @return Response
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);
        $category->status = -1;
        $category->save();

        session()->flash('message', 'Deleted successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('admin_category.index'));
    }
}
