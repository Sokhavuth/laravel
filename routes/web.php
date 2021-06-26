<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $setting = config('settings');

    $posts = DB::select('select * from posts limit 7');
    $setting['posts'] = $posts;

    return view('index', $setting);
});

Route::get('/post/{id}', function ($id) {
    $setting = config('settings');

    $posts = DB::select('select * from posts where id=?', [$id]);
    $setting['posts'] = $posts;

    return view('post', $setting);
});

Route::get('/login', function () {
    if(session('user')){
        return view('admin/index', config('settings'));
    }
    return view('login', config('settings'));
});

Route::post('/login', [UserController::class, 'checkUser']);

Route::post('/admin/post', [PostController::class, 'insertPost']);