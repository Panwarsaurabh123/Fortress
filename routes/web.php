<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [FrontendController::class, 'homepage'])->name('loginPage'); 
Route::post('/register', [FrontendController::class, 'register'])->name('register'); 
Route::post('/login', [FrontendController::class, 'login'])->name('login'); 
Route::any('/verify-user/{token}', [FrontendController::class, 'verifyUser']);
Route::get('/reset-password/{token}', [FrontendController::class, 'resetPassword']);
Route::post('/reset-password-submit', [FrontendController::class, 'resetPasswordSubmit'])->name('reset-password-submit');




Route::any('/users/forgot_password/', [FrontendController::class, 'forgot_password'])->name('forgot_password');


Route::group(['middleware' => ['adminmiddleware']], function() {
    Route::get('/admin/users/dashboard', [AdminController::class, 'index'])->name('user_dashboard');
    Route::any('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/admin/clients/account', [AdminController::class, 'admin_index'])->name('admin_dashboard');
    Route::post('/admin/clients/delete/{id}', [AdminController::class, 'client_delete'])->name('client_delete');
    Route::get('/admin/client/reset_pass/{id}', [AdminController::class, 'client_reset_pass'])->name('client_reset_pass');
    Route::post('/admin/client/resetPasswordSubmit', [AdminController::class, 'resetPasswordSubmit'])->name('resetPasswordSubmit');

    Route::get('/admin/import/', [AdminController::class, 'import_index'])->name('import'); 
    
    Route::post('/admin/client/acc_client', [AdminController::class, 'acc_client'])->name('acc_client');

});