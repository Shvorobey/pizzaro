<?php

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

    $items = session()->get('cart');
    $total = 0;
    $totalitems=0;
    if ($items != null) {
        foreach ($items as $item) {
            $total += $item->price;
            $totalitems++;
        }
    }
    return view('pages.index', ['items'=> $items, 'total'=>$total, 'totalitems'=>$totalitems]);
})-> name ('home');

Route::get('/food/{key}', '\\' . \App\Http\Controllers\ProductsAction::class)->name ('food');

Route::get('/single_product/{id}', '\\' . \App\Http\Controllers\SingleProductAction::class)->name ('single-product');

Route::post('/mail-subscribed', function (\Illuminate\Http\Request $request) {

    $subscriber = new \App\Subscriber();
    $subscriber->email = $request->input('email');
    $subscriber->status = 1;
    $subscriber->save();

    $mail=new \App\Mail\UserSubscribed($request->input('email'));
    \App\Jobs\SendEmail::dispatch($mail)->onQueue('emails');

    //$mail->subject=' Pizzaro стало немного ближе. Добро пожаловать. ';
    //$mail->from=' Команда Pizzaro';
    // \Illuminate\Support\Facades\Mail ::to('a.shvorobey@gmail.com')->send(new \App\Mail\UserSubscribed($mail));

    return view('pages.mail-subscribed');
})->name ('mail-subscribed');

Route::get('/cart/add_to_cart/{id}', '\\' . \App\Http\Controllers\AddToCartAction::class)->name ('add-to-cart');

Route::get('/cart', '\\' . \App\Http\Controllers\ShowCartAction::class)->name ('cart');

Route::get('/cart/checkout', '\\' . \App\Http\Controllers\ShowCheckoutAction::class)->name ('checkout');

Route::get('/order_reseived', function () {
    $items = [];
    $items = session()->get('cart');
    $total = 0;
    $totalitems=0;

    if ($items != null) {
        foreach ($items as $item) {
            $total += $item->price;
            $totalitems++;
        }
    }
    return view('pages.order', ['items'=> $items, 'total'=>$total, 'totalitems'=>$totalitems]);
})-> name ('order');

Route::get('/blog', '\\' . \App\Http\Controllers\ShowPostsAction::class)-> name ('blog');

Route::get('/blog/posts_by_autor/{id}', '\\' . \App\Http\Controllers\ShowPostsByAutor::class)-> name ('posts-by-autor');

Route::get('/blog/posts_by_category/{key}', '\\' . \App\Http\Controllers\ShowPostsByCategory::class)-> name ('posts-by-category');

Route::get('/blog/single_post/{id}', '\\' . \App\Http\Controllers\ShowSinglePost::class)-> name ('single-post');

Route::match (['get', 'post'], '/admin/form/new', '\\' . \App\Http\Controllers\FormSaveActionController::class)-> name ('form-action-new');

Route::match (['get', 'post'], '/admin/form/update/', '\\' . \App\Http\Controllers\FormUpdateActionController::class)-> name ('form-action-update');

Route::match (['get'], '/admin/products', '\\' . \App\Http\Controllers\ProductsListAction::class)-> name ('form-products-list');

Route::match (['delete'], '/admin/products-delete', function (\Illuminate\Http\Request $request){
    $product = \App\Product::find ($request->input('id'));
    $product->delete ();
    return back();
})-> name ('form-products-list');


//Route::get('pages/login-and-register', '\\' . \App\Http\Controllers\ShowSinglePost::class)-> name ('single-post');