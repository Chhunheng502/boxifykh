<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandIdentityController;
use App\Http\Controllers\ChatboxController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PageNavigatorController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', [PageNavigatorController::class, 'viewHome'])->name('pages.home');
Route::get('/feature', [PageNavigatorController::class, 'viewFeature'])->name('pages.feature');
Route::get('/pricing', [PageNavigatorController::class, 'viewPricing'])->name('pages.pricing');
Route::get('/blog', [PageNavigatorController::class, 'viewBlog'])->name('pages.blog');
Route::get('/about', [PageNavigatorController::class, 'viewAbout'])->name('pages.about');

Route::get('/feature/brand-identity', [FeatureController::class, 'viewBranding'])->name('feature.brand');
Route::post('/feature/brand-identity', [FeatureController::class, 'generateBrandingLogo'])->name('feature.brand.generate');
Route::post('/feature/brand-identity/download', [FeatureController::class, 'downloadBrandingLogo'])->name('feature.brand.download');
Route::get('/feature/packaging-design', [FeatureController::class, 'viewPackaging'])->name('feature.packaging');
Route::post('/feature/packaging-design', [FeatureController::class, 'generatePackagingBox'])->name('feature.packaging.generate');

Route::get('/feature/chatbox', [ChatboxController::class, 'index'])->name('chatbox.index');
Route::post('/feature/chatbox', [ChatboxController::class, 'send'])->name('chatbox.send');

Route::get('/login', [AuthController::class, 'viewLogin'])->name('auth.view');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/signup', [UserController::class, 'create'])->name('user.create');
Route::post('/signup', [UserController::class, 'store'])->name('user.store');

Route::get('/admin/dashboard', [AdminController::class, 'viewDashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'viewUsers'])->name('admin.users');