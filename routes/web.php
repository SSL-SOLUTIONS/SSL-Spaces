<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SSL_SpacesController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// SSL Spaces Main web.
Route::get('/', [SSL_SpacesController::class, 'index'])->name('index');
Route::get('features', [SSL_SpacesController::class, 'features'])->name('features');
Route::get('lern&grow', [SSL_SpacesController::class, 'lern_grow'])->name('lern&grow');
Route::get('gallery', [SSL_SpacesController::class, 'gallery'])->name('gallery');
Route::get('blog', [SSL_SpacesController::class, 'blog'])->name('blog');
Route::get('blog-demo', [SSL_SpacesController::class, 'blog_demo'])->name('blog-demo');
Route::get('pricing', [SSL_SpacesController::class, 'pricing'])->name('pricing');
Route::get('partners', [SSL_SpacesController::class, 'partners'])->name('partners');
Route::get('contact-us', [SSL_SpacesController::class, 'contact_us'])->name('contact_us');
Route::get('login', [SSL_SpacesController::class, 'login'])->name('login');
Route::get('404-not-found', [SSL_SpacesController::class, 'notfound'])->name('notfound');
Route::get('505-HTTP-error', [SSL_SpacesController::class, 'HTTPerror'])->name('HTTPerror');
// Route::get('footer', [SSL_SpacesController::class, 'footer'])->name('footer');

// SSL Spaces Admin Panel 
Route::get('dashboard', [AdminController::class, 'index'])->name('admin-index');
Route::get('pages-profile', [AdminController::class, 'pages_profile'])->name('pages-profile');
Route::get('pages-sign-in', [AdminController::class, 'pages_sign_in'])->name('pages-sign-in');
Route::get('pages-sign-up', [AdminController::class, 'pages_sign_up'])->name('pages-sign-up');
Route::get('index-feature', [AdminController::class, 'feature'])->name('index-features');
Route::get('index-lern&grow', [AdminController::class, 'lern_grow'])->name('index-lern&grow');
Route::get('index-gallery', [AdminController::class, 'gallery'])->name('index-gallery');
Route::get('index-blog', [AdminController::class, 'blog'])->name('index-blogs');
Route::get('index-pricing', [AdminController::class, 'pricing'])->name('index-pricing');
Route::get('index-charts', [AdminController::class, 'charts'])->name('index-charts');
Route::get('index-map', [AdminController::class, 'map'])->name('index-map');

// Blog

Route::resource('dashboard_blogs', BlogController::class)->except(['show']);
