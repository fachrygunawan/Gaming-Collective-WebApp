<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\WishlistController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Forum;
use App\Models\Item;
use App\Models\Wishlist;
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

Route::get('/', function () {
    return view('Homepage',['produk'=>Item::all()]);
});

Route::get('/homepage', function () {
    return view('Homepage',['produk'=>Item::all()]);
});

Route::get('/login',function(){
    return view('login');
})->name('login')->middleware('guest');

Route::get('/signup',function(){
    return view('SignUp');
})->middleware('guest');

Route::post('/login',[UserController::class,'store']);

Route::post('/',[UserController::class,'authenticate']);

Route::get('/logout',[UserController::class,'logout']);

Route::get('/Homepage', function () {
    return view('Homepage',['produk'=>Item::all()]);
});

Route::get('/ProductDetail', function () {
    return view('ProductDetail');
})->middleware('auth');

Route::get('/Cart', function () {
    return view('Cart',['carts'=>Cart::all()]);
});

Route::get('/Forum', function () {
    return view('Forum',['post' => Forum::all()]);
})->middleware('auth');

Route::get('/EditForum', function () {
    return view('EditForum');
});

Route::get('/Category', function () {
    return view('Category',['produk'=>Item::all(),'kategori'=>Category::all(),'temp'=>Category::first()]);
});

Route::get('/Admin', function () {
    return view('/admin/dashboard');
});

Route::get('/AdminProduct', function () {
    return view('/admin/product');
});

Route::get('/AdminAddProduct', function () {
    return view('/admin/addproduct',['kategori'=> Category::all()]);
});

Route::get('/AdminEditProduct', function () {
    return view('/admin/editproduct');
});

Route::get('/AdminCategory', function () {
    return view('/admin/category');
});

Route::get('/AdminEditCategory', function () {
    return view('/admin/editcategory');
});

Route::get('/Wishlist', function () {
    return view('Wishlist',['wishes'=>Wishlist::all()]);
});

Route::get('/HistoryPembelian', function () {
    return view('HistoryPembelian');
});

Route::get('/Checkout', function () {
    return view('Checkout');
});

Route::post('/Forum',[ForumController::class,'store']);

Route::post('/reply',[ReplyController::class,'store']);

Route::get('/adminDashboard',function () {
    return view('admin.dashboard');
});

Route::get('/products',function () {
    return view('admin.product');
});

Route::get('/Profile',function(){
    return view('ProfilePage');
});

Route::post('/change-profile-pic/{id}',[UserController::class,'editProfilepPic']);

Route::post('/editNama/{id}',[UserController::class,'editNama']);

Route::resource('items', ItemController::class);

Route::get('/editForum/{id}',function($id) {
    return view('EditForum',['post'=>Forum::find($id)]);
});

Route::get('/hapusForum/{id}',[ForumController::class,'destroy']);

Route::post('editingForum/{id}',[ForumController::class,'edit']);

Route::get('/products', [ItemController::class, 'index']);

Route::get('/AdminCategory', [CategoryController::class, 'index']); 

Route::get('/ProductDetail/{id}', [ItemController::class, 'show'])->middleware('auth');

Route::get('/Cart/{id}', [CartController::class, 'store']);

Route::get('/delWishlist/{id}', [WishlistController::class, 'destroy']);

Route::post('/addWishlist', [WishlistController::class, 'store']);

Route::get('/editItem/{id}', function($id) {
    return view('admin.editproduct',['item'=>Item::find($id),'kategori'=>Category::all()]);
});

Route::get('/AdminEditCategory/{id}', function($id) {
    return view('admin.editcategory', ['kateg'=>Category::find($id)]);
});

Route::resource('carts', CartController::class);

Route::delete('carts', [CartController::class, 'destroyAll'])->name('carts.destroyAll');

Route::resource('category', CategoryController::class);

Route::post('/Category',[CategoryController::class,'show']);

Route::get('search', [ItemController::class, 'search'])->name('items.search');

//Route::get('/editProduk/{id}',[ItemController::class,'update']);