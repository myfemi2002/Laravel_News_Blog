<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\WebSettingsController;
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
    return view('frontend.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// All Routes
Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//Start  middleware Auth Route
Route::group(['middleware' => 'auth'],function(){Route::prefix('users')->group(function () {

    Route::get('/view', [UserController::class, 'UserView'])->name('users.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
    });

// Category Management Routes
Route::prefix('category')->group(function () {
    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('category.view');
    Route::get('/add', [CategoryController::class, 'CategoryAdd'])->name('category.add');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
    });

// Sub Category Management Routes
Route::prefix('subcategory')->group(function () {
    Route::get('/view', [SubCategoryController::class, 'SubCategoryView'])->name('subcategory.view');
    Route::get('/add', [SubCategoryController::class, 'SubCategoryAdd'])->name('subcategory.add');
    Route::post('/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
    Route::get('/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');
    Route::post('/update/{id}', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');
    Route::get('/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');
});

// District Management Routes
Route::prefix('district')->group(function () {
    Route::get('/view', [DistrictController::class, 'DistrictView'])->name('district.view');
    Route::get('/add', [DistrictController::class, 'DistrictAdd'])->name('district.add');
    Route::post('/store', [DistrictController::class, 'DistrictStore'])->name('district.store');
    Route::get('/edit/{id}', [DistrictController::class, 'DistrictEdit'])->name('district.edit');
    Route::post('/update/{id}', [DistrictController::class, 'DistrictUpdate'])->name('district.update');
    Route::get('/delete/{id}', [DistrictController::class, 'DistrictDelete'])->name('district.delete');
    });

    // Post  Management Routes
Route::prefix('post')->group(function () {
    Route::get('/view', [PostController::class, 'PostView'])->name('post.view');
    Route::get('/add', [PostController::class, 'PostAdd'])->name('post.add');
    Route::post('/store', [PostController::class, 'PostStore'])->name('post.store');
    Route::get('/edit/{id}', [PostController::class, 'PostEdit'])->name('post.edit');
    Route::post('/update/{id}', [PostController::class, 'PostUpdate'])->name('post.update');
    Route::get('/delete/{id}', [PostController::class, 'PostDelete'])->name('post.delete');
    });

    // Json Data for Category
Route::get('/get/subcategory/{category_id}', [PostController::class, 'GetSubCategory']);

// Social Settings Management Routes
Route::prefix('social')->group(function () {
    Route::get('/setting', [SettingsController::class, 'SocialSetting'])->name('social.setting');
    Route::post('/update/{id}', [SettingsController::class, 'SocialUpdate'])->name('update.social');
});

// SEo Settings Management Routes
Route::prefix('seo')->group(function () {
    Route::get('/setting', [SettingsController::class, 'SeoSetting'])->name('seo.setting');
    Route::post('/update/{id}', [SettingsController::class, 'SeoUpdate'])->name('update.seo');
});


// livetv Settings Management Routes
Route::prefix('livetv')->group(function () {
    Route::get('/setting', [SettingsController::class, 'LivetvSetting'])->name('livetv.setting');
    Route::post('/update/{id}', [SettingsController::class, 'LivetvUpdate'])->name('update.livetv');
    Route::get('/active/{id}', [SettingsController::class, 'ActiveLivetvSettings'])->name('active.livetv');
    Route::get('/deactive/{id}', [SettingsController::class, 'DeactiveLivetvSettings'])->name('deactive.livetv');
});

// Notice Settings Management Routes
Route::prefix('notice')->group(function () {
    Route::get('/setting', [SettingsController::class, 'NoticeSetting'])->name('notice.setting');
    Route::post('/update/{id}', [SettingsController::class, 'NoticeUpdate'])->name('update.notice');
    Route::get('/active/{id}', [SettingsController::class, 'ActiveNoticeSettings'])->name('active.notice');
    Route::get('/deactive/{id}', [SettingsController::class, 'DeactiveNoticeSettings'])->name('deactive.notice');
});


// Website Settings Management Routes
Route::prefix('website')->group(function () {
    Route::get('/view', [SettingsController::class, 'WebsiteView'])->name('website.view');
    Route::get('/add', [SettingsController::class, 'WebsiteAdd'])->name('website.add');
    Route::post('/store', [SettingsController::class, 'WebsiteStore'])->name('website.store');
    Route::get('/edit/{id}', [SettingsController::class, 'WebsiteEdit'])->name('website.edit');
    Route::post('/update/{id}', [SettingsController::class, 'WebsiteUpdate'])->name('website.update');
    Route::get('/delete/{id}', [SettingsController::class, 'WebsitesDelete'])->name('website.delete');
    });

    // Gallery  Management Routes
    Route::prefix('gallery')->group(function () {
        Route::get('/view', [GalleryController::class, 'PhotoGalleryView'])->name('gallery.view');
        Route::get('/add', [GalleryController::class, 'PhotoGalleryAdd'])->name('gallery.add');
        Route::post('/store', [GalleryController::class, 'PhotoGalleryStore'])->name('gallery.store');
        Route::get('/edit/{id}', [GalleryController::class, 'PhotoGalleryEdit'])->name('gallery.edit');
        Route::post('/update/{id}', [GalleryController::class, 'PhotoGalleryUpdate'])->name('gallery.update');
        Route::get('/delete/{id}', [GalleryController::class, 'PhotoGalleryDelete'])->name('gallery.delete');
    });

        // video  Management Routes
        Route::prefix('video')->group(function () {
            Route::get('/view', [videoController::class, 'videoView'])->name('video.view');
            Route::get('/add', [videoController::class, 'videoAdd'])->name('video.add');
            Route::post('/store', [videoController::class, 'videoStore'])->name('video.store');
            Route::get('/edit/{id}', [videoController::class, 'videoEdit'])->name('video.edit');
            Route::post('/update/{id}', [videoController::class, 'videoUpdate'])->name('video.update');
            Route::get('/delete/{id}', [videoController::class, 'videoDelete'])->name('video.delete');
        });

    // Ads  Management Routes
    Route::prefix('ads')->group(function () {
        Route::get('/view', [AdsController::class, 'AdsView'])->name('ads.view');
        Route::get('/add', [AdsController::class, 'AdsAdd'])->name('ads.add');
        Route::post('/store', [AdsController::class, 'AdsStore'])->name('ads.store');
        Route::get('/edit/{id}', [AdsController::class, 'AdsEdit'])->name('ads.edit');
        Route::post('/update/{id}', [AdsController::class, 'AdsUpdate'])->name('ads.update');
        Route::get('/delete/{id}', [AdsController::class, 'AdsDelete'])->name('ads.delete');
        });

    // Roles  Management Routes
    Route::prefix('roles')->group(function () {
        Route::get('/view', [RoleController::class, 'RoleView'])->name('roles.view');
        Route::get('/add', [RoleController::class, 'RoleAdd'])->name('roles.add');
        Route::post('/store', [RoleController::class, 'RoleStore'])->name('roles.store');
        Route::get('/edit/{id}', [RoleController::class, 'RoleEdit'])->name('roles.edit');
        Route::post('/update/{id}', [RoleController::class, 'RoleUpdate'])->name('roles.update');
        Route::get('/delete/{id}', [RoleController::class, 'RoleDelete'])->name('roles.delete');
        });

        // Web settings  Management Routes
        Route::prefix('websetting')->group(function () {
            Route::get('/settings', [WebSettingsController::class, 'MainWebSetting'])->name('websetting.settings');
            Route::post('/update/{id}', [WebSettingsController::class, 'UpdateWebSetting'])->name('websetting.update');
        });








});//End  middleware Auth Route



Route::get('/view/post/{id}', [SinglePostController::class, 'SinglePost']);

Route::get('/catpost/{id}/{category}', [SinglePostController::class, 'CatPost']);

Route::get('/subcatpost/{id}/{subcategory}', [SinglePostController::class, 'SubCatPost']);




























