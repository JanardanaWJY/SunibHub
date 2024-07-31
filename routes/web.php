<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReplyController;
use App\Models\Reply;

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
use App\Http\Controllers\Admin\PageController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', [PageController::class, 'login']);
// Route::get('/signup', [PageController::class, 'signup']);
// Route::get('/home', [PageController::class, 'home']);

// Registration Route
Route::get('/showRegist',[UserController::class, 'showRegist'])->name('showRegist')->middleware();
Route::post('/register',[UserController::class, 'registerAccount'])->name('registerAccount');

// Login & logout Route
Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('validate');
Route::post('/logout', [LogoutController::class,'logout'])->name('logout');

// Thread making routes (and reply)
Route::middleware('auth')->group(function (){
Route::get('/threads', [ThreadController::class, 'create'])->name('threads.create');
Route::post('/threads/create', [ThreadController::class, 'store'])->name('threads.store');
Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');
Route::post('/threads/{thread}/replies', [ReplyController::class, 'store'])->name('replies.store');
Route::get('/threads/{thread}', [ThreadController::class, 'showReply'])->name('threads.showReply');
Route::delete('threads/{thread}', [ThreadController::class, 'destroy'])->name('thread.delete');
Route::delete('replies/{reply}', [ReplyController::class, 'destroy'])->name('replies.delete');
});
Route::get('/threads', [ThreadController::class, 'create'])->name('threads.create');
Route::post('/threads/create', [ThreadController::class, 'store'])->name('threads.store');
Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');
Route::post('/threads/{thread}/replies', [ReplyController::class, 'store'])->name('replies.store');
Route::get('/threads/{thread}', [ThreadController::class, 'showReply'])->name('threads.showReply');
Route::delete('threads/{thread}', [ThreadController::class, 'destroy'])->name('thread.delete');
Route::delete('replies/{reply}', [ReplyController::class, 'destroy'])->name('replies.delete');

Route::get('/home', [PageController::class, 'home']);
