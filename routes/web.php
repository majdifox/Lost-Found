<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




use App\Http\Controllers\HomeController;


use App\Http\Controllers\CategoryController;


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

// All posts
Route::get('/', [PostController::class, 'index'])->name('home');

// Post CRUD operations
Route::get('/post', [PostController::class,'index'])->name('post.index');
Route::get('/post/create', [PostController::class,'create'])->name('post.create');
Route::post('/post', [PostController::class,'store'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class,'edit']);
Route::get('/post/edit/{id}', function(){
    return view('post.mine');
});



// Route::get('/post/mine', [PostController::class,'edit'])->name('post.mine');


// Route::get('/post/mine/{post}/edit', [PostController::class,'edit'])->name('post.edit');






// Route::get('/post/create', [PostController::class,'index'])->name('post.index');
// Route::post('/post', [PostController::class,'createPost'])->name('post.createPost');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// post related routes

// Route::post('/create-post', [PostController::class, 'createPost']);

require __DIR__.'/auth.php';

Route::get('post/dashboard', [HomeController::class, 'index']);






Route::resource('category',CategoryController::class );