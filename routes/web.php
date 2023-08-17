<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/',[PostController::class,'index'])->name('home');

Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::post('logout',[SessionController::class,'destroy']);
Route::get('login',[RegisterController::class,'login'])->middleware('guest');
Route::post('login',[RegisterController::class,'userLogin'])->middleware('guest');

Route::get('/category/{category}',function(Category $category){
    return view('posts.category',[
        'category' => $category,
        'categories' => Category::all()

    ]);
    
});