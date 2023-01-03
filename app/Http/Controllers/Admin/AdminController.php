<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\User;

/**
 *
 */
class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::all()->where('created_at', '>=', date('Y-m-d') . ' 00:00:00');
        foreach ($blogs as $blog) {
            $blog->author = User::find($blog->user_id)->name;
        }

        $contacts = Contact::all()->where('created_at', '>=', date('Y-m-d') . ' 00:00:00');

        return view('admin.home', [
            'blogs' => $blogs,
            'contacts' => $contacts,
            'title' => 'Dashboard'
        ]);
    }
}
