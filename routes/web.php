<?php

use App\Http\Controllers\PostController;
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




// Route::get('/', [PostController::class, 'index']);

// Route::get('/post/{id}', [PostController::class, 'show']);

// // postManpulation
// Route::get('/form', [PostController::class, 'postManpulation']);

// Route::delete('/post/{id}', [PostController::class, 'remove'])->name('post.remove');



Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/clear-session', function () {
    session()->forget('posts');
    return redirect()->route('posts.index')->with('success', 'Session cleared.');
});


// Route::patch('/update/{id}',[PostController::class,'postManpulation'])
// Route::get('/about', function () {
//     return view('about');
// });



// Route::get('/contact', function () {
//     return view('contact');
// });
