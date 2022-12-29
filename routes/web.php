<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QizeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SuperAdminContorller;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user admin penel route start

Route::prefix('user')->group(function(){
   Route::get('/account/add',[AdminUserController::class,'AccountAdd'])->name('account.add');
   Route::post('/user/registation',[AdminUserController::class,'AccountStore'])->name('reg.store');
});

// super admin section

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[SuperAdminContorller::class,'AdminDashbordView'])->middleware(['auth', 'verified'])->name('admin.deshboard');
    Route::get('/account/view',[SuperAdminContorller::class,'AllAcountView'])->name('all.account.view');
    Route::get('/user/registation/form',[SuperAdminContorller::class,'RegFormView'])->name('user.reg.view');
    Route::post('/user/registation',[SuperAdminContorller::class,'UserRegistation'])->name('user.reg');
    Route::get('/user/active/{id}',[SuperAdminContorller::class,'UserActive'])->name('user.active');
    Route::get('/user/delete/{id}',[SuperAdminContorller::class,'UserDelete'])->name('user.delete');
});
// Question section route

Route::prefix('question')->group(function(){
    Route::get('/show',[QuestionController::class,'Qview'])->name('q.view');
    Route::get('/add',[QuestionController::class,'Qadd'])->name('q.add');
    Route::post('/store',[QuestionController::class,'Qstore'])->name('question.add');
    Route::get('/delete/{id}',[QuestionController::class,'Qdelete'])->name('question.delete');
    Route::get('/category/view',[QuestionController::class,'Qcategory'])->name('q.category');
    Route::post('/category/store',[QuestionController::class,'Catstore'])->name('cat.store');
});


// Qize route section =================================

Route::prefix('qize')->group(function(){
    Route::get('/setup/view',[QizeController::class,'QizeSetupView'])->name('qize.setup');
});





require __DIR__.'/auth.php';
