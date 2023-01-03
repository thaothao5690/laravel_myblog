<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//user
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

//admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/about-us', function () {
    return view('about-us')->with('title', 'About us');
})->name('about-us');

Auth::routes();

Route::fallback(function () {
    return view('404');
});

//Blog
Route::get('blog/author/{id}', [
    BlogController::class,
    'author'
])->name('blog.author');
Route::get('blog/user', [
    BlogController::class,
    'user'
])->name('blog.user');
Route::resource('blog', BlogController::class);

//Category
Route::resource('category', CategoryController::class);

//Contact
Route::get('contact-us/submit', [
    ContactController::class,
    'submit'
])->name('contact-us.submit');
Route::resource('contact-us', ContactController::class);

//Admin
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    //blog
    Route::resource('admin_blog', AdminBlogController::class);

    //category
    Route::resource('admin_category', AdminCategoryController::class);

    //contact
    Route::get('admin_contact/mail', [
        AdminContactController::class,
        'sendMail'
    ])->name('admin_contact.mail');
    Route::get('admin_contact/{id}/reply', [
        AdminContactController::class,
        'reply',
    ])->name('admin_contact.reply');
    Route::resource('admin_contact', AdminContactController::class);
});
