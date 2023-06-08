<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\pageController;
use App\Models\blog;
use Illuminate\Support\Str;
/* pages */
Route::get('/', function () {
    $data=blog::limit(3)->orderBy('created_at','desc')->get();
    $limitedData = $data->map(function ($item) {
        $item->content = Str::limit($item->content, 200);
        return $item;
    });
    return view ('pages.home',compact('limitedData'));
})->name('home');

Route::get('/action', function () {
    $data=blog::orderBy('created_at','desc')->get();
    return view ('pages.blog',compact('data'));
})->name('blog');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* blog */
Route::get('/blogs',[blogController::class,'index'])->name('blogs')->middleware('auth','verified');
Route::get('/blogsByUser',[blogController::class,'getBlogsByUserId'])->name('blogsByUser');
Route::get('/admin/create', [blogController::class, 'create'])->name('create')->middleware('auth','verified');
Route::post('/admin/store', [blogController::class, 'store'])->name('store');
Route::get('/blogs/{id}', [blogController::class, 'show'])->name('show');
Route::delete('/blogs/{id}', [blogController::class, 'destroy'])->name('destroy')->middleware('auth','verified');
Route::get('/blogs/edit/{id}', [blogController::class, 'edit'])->name('edit')->middleware('auth','verified');
Route::post('/blogs/{id}', [blogController::class, 'update'])->name('update')->middleware('auth','verified');

// Route::get('/blogs/{user_id}', [blogController::class, 'getBlogsByUserId'])->name('getBlogsByUserId')->middleware('auth','verified');

// Route::get('/home',[blogController::class,'index'])->name('home');
// Route::get('/about',[pageController::class,'about'])->name('about');
// Route::get('/contact', function () {
//     return view('contact');
//     })->name('contact');