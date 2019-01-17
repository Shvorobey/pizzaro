<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/blog', function () {
    return response()->json(\App\Post:: all(), 200);
});

Route::get('/blog/single_post/{id}', function ($id) {
    return response()->json(\App\Post:: find($id), 200);
});

Route::post('/blog', function (Request $request) {
    $post = new \App\Post();
    $post->user_id = $request->post('user_id');
    $post->title = $request->post('title');
    $post->body = $request->post('body');
    $post->cover = $request->post('cover');
    $post->save();
    return response()->json($post, 201);
});

Route::put('/blog/{id}', function (Request $request, $id) {
    $post = \App\Post::find($id);
    $post->user_id = $request->post('user_id');
    $post->title = $request->post('title');
    $post->body = $request->post('body');
    $post->cover = $request->post('cover');
    $post->save();
    return response()->json($post, 201);
});

Route::delete('/blog/{id}', function (Request $request, $id) {
    $post = \App\Post::find($id);
    $post->delete();
    return response()->json(null, 204);
});
