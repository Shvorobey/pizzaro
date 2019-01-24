<?php


Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/locator', function () {
    return view('pages.locator');
})->name('locator');


Route::get('/food/{key}', '\\' . \App\Http\Controllers\ProductsAction::class)->name('food');

Route::get('/single_product/{id}', '\\' . \App\Http\Controllers\SingleProductAction::class)->name('single-product');

Route::post('/mail-subscribed', function (\Illuminate\Http\Request $request) {

    $subscriber = new \App\Subscriber();
    $subscriber->email = $request->input('email');
    $subscriber->status = 1;
    $subscriber->save();

    $mail = new \App\Mail\UserSubscribed($request->input('email'));
    \App\Jobs\SendEmail::dispatch($mail)->onQueue('emails');

    return view('pages.mail-subscribed');
})->name('mail-subscribed');

Route::get('/cart/add_to_cart/{id}', '\\' . \App\Http\Controllers\AddToCartAction::class)->name('add-to-cart');

Route::get('/cart', '\\' . \App\Http\Controllers\ShowCartAction::class)->name('cart');

Route::get('/cart/remove/{id}', '\\' . \App\Http\Controllers\RemoveCartAction::class)->name('remove-from-cart');

Route::post('/update_cart', '\\' . \App\Http\Controllers\UpdateCartAction::class)->name('update-cart');

Route::get('/cart/checkout', function (){
    return view('pages.checkout');} )->name('checkout');

Route::post('/cart/checkout', '\\' . \App\Http\Controllers\OrderController::class)->name('checkout');

Route::get('/order_reseived/{id}', function (\Illuminate\Http\Request $request, $id) {
    $order = \App\Order::find($id);
    return view('pages.order', ['order' => $order]);
})->name('order');

Route::get('/blog', '\\' . \App\Http\Controllers\ShowPostsAction::class)->name('blog');

Route::get('/blog/posts_by_autor/{id}', '\\' . \App\Http\Controllers\ShowPostsByAutor::class)->name('posts-by-autor');

Route::get('/blog/posts_by_category/{key}', '\\' . \App\Http\Controllers\ShowPostsByCategory::class)->name('posts-by-category');

Route::get('/blog/single_post/{id}', '\\' . \App\Http\Controllers\ShowSinglePost::class)->name('single-post');

Route::match(['get', 'post'], '/admin/form/new', '\\' . \App\Http\Controllers\FormSaveActionController::class)->name('form-action-new');

Route::match(['get', 'post'], '/admin/form/update/{id?}', '\\' . \App\Http\Controllers\FormUpdateActionController::class)->name('form-action-update');

Route::match(['get'], '/admin/products', '\\' . \App\Http\Controllers\ProductsListAction::class)->name('products-list');

Route::match(['delete'], '/admin/products-delete', function (\Illuminate\Http\Request $request) {
    $product = \App\Product::find($request->input('id'));
    $product->delete();
    return back();
})->name('form-products-list');


//Route::get('pages/login-and-register', '\\' . \App\Http\Controllers\ShowSinglePost::class)-> name ('single-post');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('searchSimple', 'SearchController@index')->name('searchSimple');
