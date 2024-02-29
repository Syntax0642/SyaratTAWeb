<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
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
    return redirect('/home');
});


Route::get('/home', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/register/index',[RegisterController::class,'indexregister'])->name('register.index')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/signin', [registerController::class, "Register"])->middleware('guest');

Route::get('/login/index',[LoginController::class,'indexlogin'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->middleware('guest');
Route::get('/index', [loginController::class, "indexlogin"])->name('login')->middleware('guest');
Route::post('/logout', [loginController::class, "logout"])->middleware('auth');



Route::get('/siswa/index',[SiswaController::class,'index'])->name('siswa.index')->middleware('guest');
Route::get('/siswa/detail/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');


Route::get('/kelas/index',[KelasController::class,'indexkelas'])->name('kelas.index')->middleware('guest');

Route::group(["prefix" => "/dashboard"], function(){
    Route::get('/index',[DashboardController::class,'indexdashboard'])->name('dashboard.index')->middleware('auth');
    Route::get('/siswa/index',[DashboardController::class,'showsiwa'])->name('dashboard.siswa.index')->middleware('auth');
    Route::get('/siswa/detail/{siswa}', [DashboardController::class, 'showdetailsiswa'])->name('dashboard.siswa.show')->middleware('auth');
    Route::delete('/siswa/delete/{siswa}', [DashboardController::class, 'destroy'])->name('dashboard.siswa.destroy')->middleware('auth');
    Route::get('/siswa/edit/{siswa}', [DashboardController::class, 'edit'])->name('dashboard.siswa.edit')->middleware('auth');
    Route::put('/siswa/update/{siswa}', [DashboardController::class, 'update'])->name('dashboard.siswa.update')->middleware('auth');
    Route::get('/siswa/add/', [DashboardController::class, 'add'])->name('dashboard.siswa.add')->middleware('auth');
    Route::put('/siswa/store/', [DashboardController::class, 'store'])->name('dashboard.siswa.update')->middleware('auth');
    Route::get('/kelas/index',[DashboardController::class,'showkelas'])->name('dashboard.kelas.index')->middleware('auth');
    Route::delete('/kelas/delete/{kelas}', [DashboardController::class, 'destroys'])->name('dashboard.kelas.destroys')->middleware('auth');
    Route::get('/kelas/edit/{kelas}', [DashboardController::class, 'edits'])->name('dashboard.kelas.edits')->middleware('auth');
    Route::put('/kelas/update/{kelas}', [DashboardController::class, 'updates'])->name('dashboard.kelas.updates')->middleware('auth');
    Route::get('/kelas/add/', [DashboardController::class, 'adds'])->name('dashboard.kelas.adds')->middleware('auth');
    Route::put('/kelas/store/', [DashboardController::class, 'stores'])->name('dashboard.kelas.stores')->middleware('auth');
    Route::get("/filter",[DashboardController::class,'filter']);
});
