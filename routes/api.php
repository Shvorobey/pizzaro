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

    $post = \App\Post:: paginate(5);

    return response()->json($post, 200);
});

Route::get('/blog/single_post/{id}', function ($id) {
    try {
        $post = new App\Http\Resources\PostResource (\App\Post::findOrFail($id));
    } catch (\Exception $exception) {
        return response()->json(null, 404);
    }
    return response()->json($post, 200);
});

Route::post('/blog', function (Request $request) {

    $rules = [
        'user_id' => 'required|integer',
        'title' => 'required|max:35|min:3',
        'body' => 'required|max:1000|min:25',
        'cover' => 'required|image',
    ];
    /** @var \Illuminate\Support\Facades\Validator */
    $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }
    $post = new \App\Post();
    $post->user_id = $request->post('user_id');
    $post->title = $request->post('title');
    $post->body = $request->post('body');
    $post->cover = $request->post('cover');
    $post->save();
    return response()->json($post, 201);
});

Route::put('/blog/{id}', function (Request $request, $id) {
    try {
        $post = \App\Post::findOrFail($id);
    } catch (\Exception $exception) {
        return response()->json(null, 404);
    }
    $rules = [
        'user_id' => 'required|integer',
        'title' => 'required|max:35|min:3',
        'body' => 'required|max:1000|min:25',
        'cover' => 'required|image',
    ];
    /** @var \Illuminate\Support\Facades\Validator */
    $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }
    $post->user_id = $request->post('user_id');
    $post->title = $request->post('title');
    $post->body = $request->post('body');
    $post->cover = $request->post('cover');
    $post->save();
    return response()->json($post, 201);
});

Route::delete('/blog/{id}', function (Request $request, $id) {
    try {
        $post = \App\Post::findOrFail($id);
    } catch (\Exception $exception) {
        return response()->json(null, 404);
    }
    $post->delete();
    return response()->json(null, 204);
});

Route::get('/blog/posts_by_autor/{id}', function ($id) {
    try {
        $post = \App\Post::where( 'user_id', '=', $id)->get ();
    } catch (\Exception $exception) {
        return response()->json(null, 404);
    }
    return response()->json($post, 200);
});

