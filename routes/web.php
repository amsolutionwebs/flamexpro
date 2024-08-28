<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AboutController,
    BlogController,
    ContactController,
    GalleryController,
    HomeController,
    ProductController,
    ServiceController,
    FireAlarmSystem,
    TrainingController
};

use App\Http\Controllers\Admin\{
    IndexController,
    AuthController,
    DashboardController,
    AdminContactController,
    PageController,
    PostController,
    BannerController,
    SubscriberController,
    GetquateController,
    ProfileController,
    TestimonialController,
    ProductCategory,
    AdminProductController
    
};

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
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/our-expertise', [AboutController::class, 'ourExpertise'])->name('our-expertise');
Route::get('/why-choose-us', [AboutController::class, 'whyChooseUs'])->name('why-choose-us');
Route::get('/get-in-touch', [AboutController::class, 'getInToch'])->name('get-in-touch');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'blogdetails'])->name('blog-details');

Route::get('/blog/{slug}', [BlogController::class, 'blogdetails']);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/subscriber', [ContactController::class, 'storeSubsciber']);

Route::post('/contact/contact-form', [ContactController::class, 'contactstore']);

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/product-category/{slug}', [ProductController::class, 'productcategory']);
Route::get('/product/{slug}', [ProductController::class, 'productdetails']);
Route::post('/flamexpro/contact-form', [ProductController::class, 'userProductContact']);
Route::get('/product-details/{id}', [ProductController::class, 'productcategorydetails']);

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/{slug}', [ServiceController::class, 'sericedetails']);

// fire alarm system
Route::get('/fire-alarm-system/{slug}', [FireAlarmSystem::class, 'getProductAlarmSystem']);

// training
Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::get('/training/{slug}', [TrainingController::class, 'trainingdetails']);











// for admin panel

Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/admin-login', [IndexController::class, 'index']);
Route::group(['middleware' => 'isadminlogin'], function () {
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/edit-profile', [AuthController::class, 'editProfile']);
Route::put('/update_password/{uid}', [ProfileController::class, 'updatePassword']);
Route::get('/admin/post_list', [PostController::class, 'index']);
Route::get('/admin/add_posts', [PostController::class, 'add_posts']);
Route::post('/admin/add_posts/store',[PostController::class,'store']);
Route::delete('/admin/posts/destory/{id}',[PostController::class,'destory']);
Route::get('/admin/update_post/edit/{id}', [PostController::class, 'edit']);
Route::put('/admin/update_post/update/{id}',[PostController::class,'update']);
Route::get('/admin/contact_list', [AdminContactController::class, 'index']);
Route::get('/admin/getquate_list', [GetquateController::class, 'index']);
Route::resource('/admin/testimonials', TestimonialController::class);
Route::get('/admin/inventory', [InventoryController::class, 'index']);
Route::resource('/admin/subscriber', SubscriberController::class);
Route::resource('/admin/banner', BannerController::class);
Route::resource('/admin/pages', PageController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/sub_category', SubcategoryController::class);
Route::resource('/admin/brands', BrandController::class);
Route::resource('/admin/modelnumber', ModelnumberController::class);
Route::resource('/admin/variation', VariationController::class);
Route::resource('/admin/sub_variation', SubvariationController::class);
Route::resource('/admin/variation_type', VariationTypeController::class);
Route::resource('/admin/products', AdminProductController::class);
Route::resource('/admin/product_category', ProductCategory::class);
});


