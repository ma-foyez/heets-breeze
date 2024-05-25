<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/Category/{id}', [PublicController::class, 'category'])->name('category.details');
Route::get('/Product', [PublicController::class, 'products'])->name('product.index');
Route::get('/Product/{id}', [PublicController::class, 'productdetails'])->name('product.details');
Route::get('/blogs', [PublicController::class, 'blogs'])->name('blogs.all');

Route::get('/blog/{blog}', [PublicController::class, 'blogDetails'])->name('blog.details');



Route::get('/getsubcat/{id}', [PublicController::class, 'getsubcat'])->name('getsubcat');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', [PublicController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

    Route::prefix('heros')->group(function () {
        // Hero-Routes
        Route::get('/', [HeroController::class, 'index'])->name('heros.index');
        Route::get('/create', [HeroController::class, 'create'])->name('heros.create');
        Route::post('/', [HeroController::class, 'store'])->name('heros.store');
        Route::get('/{hero}', [HeroController::class, 'show'])->name('heros.show');
        Route::get('/{hero}/edit', [HeroController::class, 'edit'])->name('heros.edit');
        Route::put('/{hero}', [HeroController::class, 'update'])->name('heros.update');
        Route::get('/{hero}', [HeroController::class, 'destroy'])->name('heros.destroy');
        Route::get('/active/{hero}', [HeroController::class, 'active'])->name('heros.active');
        Route::get('/inactive/{hero}', [HeroController::class, 'inactive'])->name('heros.inactive');
    });


    Route::prefix('faqs')->group(function () {
        // Hero-Routes
        Route::get('/', [FaqController::class, 'index'])->name('faqs.index');
        Route::get('/create', [FaqController::class, 'create'])->name('faqs.create');
        Route::post('/', [FaqController::class, 'store'])->name('faqs.store');
        Route::get('/{faq}', [FaqController::class, 'show'])->name('faqs.show');
        Route::get('/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
        Route::put('/{faq}', [FaqController::class, 'update'])->name('faqs.update');
        Route::get('/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');
        Route::get('/active/{faq}', [FaqController::class, 'active'])->name('faqs.active');
        Route::get('/inactive/{faq}', [FaqController::class, 'inactive'])->name('faqs.inactive');
    });






    Route::prefix('categories')->group(function () {
        // category-Routes
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/active/{category}', [CategoryController::class, 'active'])->name('categories.active');
        Route::get('/inactive/{category}', [CategoryController::class, 'inactive'])->name('categories.inactive');
    });
    Route::prefix('subcategories')->group(function () {
        // subcategory-Routes
        Route::get('/', [SubCategoryController::class, 'index'])->name('subcategories.index');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('subcategories.create');
        Route::post('/', [SubCategoryController::class, 'store'])->name('subcategories.store');
        Route::get('/{subcategory}', [SubCategoryController::class, 'show'])->name('subcategories.show');
        Route::get('/{subcategory}/edit', [SubCategoryController::class, 'edit'])->name('subcategories.edit');
        Route::put('/{subcategory}', [SubCategoryController::class, 'update'])->name('subcategories.update');
        Route::get('/{subcategory}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy');
        Route::get('/active/{subcategory}', [SubCategoryController::class, 'active'])->name('subcategories.active');
        Route::get('/inactive/{subcategory}', [SubCategoryController::class, 'inactive'])->name('subcategories.inactive');
    });

    Route::prefix('products')->group(function () {
        // product-Routes
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/', [ProductController::class, 'store'])->name('products.store');
        Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
        Route::get('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
        Route::get('/active/{product}', [ProductController::class, 'active'])->name('products.active');
        Route::get('/inactive/{product}', [ProductController::class, 'inactive'])->name('products.inactive');
    });



    Route::prefix('blogs')->group(function () {
        // Blog-Routes
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/{blog}', [BlogController::class, 'show'])->name('blogs.show');
        Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::get('/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        Route::get('/active/{blog}', [BlogController::class, 'active'])->name('blogs.active');
        Route::get('/inactive/{blog}', [BlogController::class, 'inactive'])->name('blogs.inactive');
    });



    Route::prefix('content')->group(function () {
        // Hero-Routes
        Route::get('/about/{content}/edit', [ContentController::class, 'editAbout'])->name('about.edit');
        Route::put('/about/{content}', [ContentController::class, 'updateAbout'])->name('about.update');

        Route::get('/general/{content}/edit', [ContentController::class, 'editGeneral'])->name('general.edit');
        Route::put('/general/{content}', [ContentController::class, 'updateGeneral'])->name('general.update');
        Route::get('/contact/{content}/edit', [ContentController::class, 'editContact'])->name('contact.edit');
        Route::put('/contact/{content}', [ContentController::class, 'updateContact'])->name('contact.update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
