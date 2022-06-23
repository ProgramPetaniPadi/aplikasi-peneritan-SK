<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Tendik\TendikController;
use App\Http\Controllers\Dosen\DosenControllers;
use App\Http\Controllers\Pendidikan\PendidikanController;
use App\Http\Controllers\Keluarga\KeluargaController;
use App\Http\Controllers\Pendidikan\PendidikanTendikController;
use App\Http\Controllers\Keluarga\KeluargaTendikController;
use App\Http\Controllers\Pekerjaan\PekerjaanControllers;
use App\Http\Controllers\Pekerjaan\PekerjaantendikControllers;
use App\Http\Controllers\Dosen\PerubahanDosenController;
use App\Http\Controllers\Unit\UnitController;


use Illuminate\Support\Facades\Auth;
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.user.login')->name('login');
            Route::view('/register', 'dashboard.user.register')->name('register');
            Route::post('/create', [UserController::class , 'create'])->name('create');
            Route::post('/check', [UserController::class , 'check'])->name('check');

        }
        );

        Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
            Route::get('/home', [UserController::class , 'index'])->name('home');
            Route::get('/show/{id}', [UserController::class , 'show'])->name('show');
            Route::get('/edit/{id}', [UserController::class , 'edit'])->name('edit');

            Route::get('/showpersuratan/{id}', [UserController::class , 'showpersuratan'])->name('showpersuratan');
            Route::get('/prosespersuratan/{id}', [UserController::class , 'prosespersuratan'])->name('prosespersuratan');
            Route::post('/updatedata/{id}', [UserController::class , 'updatedatabuk'])->name('updatedata');

            Route::get('/showseketaris/{id}', [UserController::class , 'showseketaris'])->name('showseketaris');
            Route::get('/prosesseketarisdirektur/{id}', [UserController::class , 'prosesseketarisdirektur'])->name('prosesseketarisdirektur');
            Route::post('/updateseketrisdirektur/{id}', [UserController::class , 'updateseketrisdirektur'])->name('updateseketrisdirektur');

            Route::get('/prosesseketarisdirektur2/{id}', [UserController::class , 'prosesseketarisdirektur2'])->name('prosesseketarisdirektur2');
            Route::post('/updateseketrisdirektur2/{id}', [UserController::class , 'updateseketrisdirektur2'])->name('updateseketrisdirektur2');

            Route::get('/prosesdirektur/{id}', [UserController::class , 'prosesdirektur'])->name('prosesdirektur');
            Route::post('/updatedirektur/{id}', [UserController::class , 'updatedirektur'])->name('updatedirektur');

            Route::get('/proseswadir/{id}', [UserController::class , 'proseswadir'])->name('proseswadir');
            Route::post('/updatewadir/{id}', [UserController::class , 'updatewadir'])->name('updatewadir');

            Route::get('/proseskoordinator/{id}', [UserController::class , 'proseskoordinator'])->name('proseskoordinator');
            Route::post('/updatekoordinator/{id}', [UserController::class , 'updatekoordinator'])->name('updatekoordinator');


            Route::get('/prosesbukpenerbitansk/{id}', [UserController::class , 'prosesbukpenerbitansk'])->name('prosesbukpenerbitansk');
            Route::post('/updatepersuratanSK/{id}', [UserController::class , 'updatepersuratanSK'])->name('updatepersuratanSK');

            Route::post('/logout', [UserController::class , 'logout'])->name('logout');
            Route::get('/add-new', [UserController::class , 'add'])->name('add');
        }
        );
    });

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.admin.login')->name('login');
            Route::post('/check', [AdminController::class , 'check'])->name('check');

        }
        );
        Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
            // Route::view('/home', 'dashboard.admin.home')->name('home');
            Route::get('/home', [AdminController::class , 'index'])->name('home');
            Route::get('/dosen', [DosenControllers::class , 'index'])->name('dosen');
            Route::get('/create|dosen', [DosenControllers::class , 'create'])->name('create|dosen');
            Route::get('/store|dosen', [DosenControllers::class , 'store'])->name('store|dosen');
            Route::get('/destroy|dosen/{id}', [DosenControllers::class , 'destroy'])->name('destroy|dosen');
            Route::get('/edit|dosen/{id}', [DosenControllers::class , 'edit'])->name('edit|dosen');
            Route::get('/update|dosen/{id}', [DosenControllers::class , 'update'])->name('update|dosen');
            Route::get('/show|dosen/{id}', [DosenControllers::class , 'show'])->name('show|dosen');
            Route::get('/perubahan', [DosenControllers::class , 'perubahandosen'])->name('perubahan');
            Route::get('/destroyperubahan|dosen/{id}', [DosenControllers::class , 'destroyperubahan'])->name('destroyperubahan|dosen');


            Route::get('/tendik', [TendikController::class , 'index'])->name('tendik');
            Route::get('/create|tendik', [TendikController::class , 'create'])->name('create|tendik');
            Route::get('/store|tendik', [TendikController::class , 'store'])->name('store|tendik');
            Route::get('/destroy|tendik/{id}', [TendikController::class , 'destroy'])->name('destroy|tendik');
            Route::get('/edit|tendik/{id}', [TendikController::class , 'edit'])->name('edit|tendik');
            Route::get('/update|tendik/{id}', [TendikController::class , 'update'])->name('update|tendik');
            Route::get('/show|tendik/{id}', [TendikController::class , 'show'])->name('show|tendik');
            Route::get('/perubahanKtendik', [TendikController::class , 'perubahantendik'])->name('perubahanKtendik');
            Route::get('/destroyperubahan|tendik/{id}', [TendikController::class , 'destroyperubahan'])->name('destroyperubahan|tendik');

            Route::get('/pekerjaandosen', [PekerjaanControllers::class , 'index'])->name('pekerjaandosen');
            Route::get('/create|pekerjaandosen', [PekerjaanControllers::class , 'create'])->name('create|pekerjaandosen');
            Route::get('/store|pekerjaandosen', [PekerjaanControllers::class , 'store'])->name('store|pekerjaandosen');
            Route::get('/destroy|pekerjaandosen/{id}', [PekerjaanControllers::class , 'destroy'])->name('destroy|pekerjaandosen');
            Route::get('/edit|pekerjaandosen/{id}', [PekerjaanControllers::class , 'edit'])->name('edit|pekerjaandosen');
            Route::get('/update|pekerjaandosen/{id}', [PekerjaanControllers::class , 'update'])->name('update|pekerjaandosen');

            Route::get('/pekerjaantendik', [PekerjaantendikControllers::class , 'index'])->name('pekerjaantendik');
            Route::get('/create|pekerjaantendik', [PekerjaantendikControllers::class , 'create'])->name('create|pekerjaantendik');
            Route::get('/store|pekerjaantendik', [PekerjaantendikControllers::class , 'store'])->name('store|pekerjaantendik');
            Route::get('/destroy|pekerjaantendik/{id}', [PekerjaantendikControllers::class , 'destroy'])->name('destroy|pekerjaantendik');
            Route::get('/edit|pekerjaantendik/{id}', [PekerjaantendikControllers::class , 'edit'])->name('edit|pekerjaantendik');
            Route::get('/update|pekerjaantendik/{id}', [PekerjaantendikControllers::class , 'update'])->name('update|pekerjaantendik');

            Route::get('/Pendidikandosen', [PendidikanController::class , 'index'])->name('Pendidikandosen');
            Route::get('/create|Pendidikandosen', [PendidikanController::class , 'create'])->name('create|Pendidikandosen');
            Route::get('/store|Pendidikandosen', [PendidikanController::class , 'store'])->name('store|Pendidikandosen');
            Route::get('/destroy|Pendidikandosen/{id}', [PendidikanController::class , 'destroy'])->name('destroy|Pendidikandosen');
            Route::get('/edit|Pendidikandosen/{id}', [PendidikanController::class , 'edit'])->name('edit|Pendidikandosen');
            Route::get('/update|Pendidikandosen/{id}', [PendidikanController::class , 'update'])->name('update|Pendidikandosen');

            Route::get('/Keluargadosen', [KeluargaController::class , 'index'])->name('Keluargadosen');
            Route::get('/create|Keluargadosen', [KeluargaController::class , 'create'])->name('create|Keluargadosen');
            Route::get('/store|Keluargadosen', [KeluargaController::class , 'store'])->name('store|Keluargadosen');
            Route::get('/destroy|Keluargadosen/{id}', [KeluargaController::class , 'destroy'])->name('destroy|Keluargadosen');
            Route::get('/edit|Keluargadosen/{id}', [KeluargaController::class , 'edit'])->name('edit|Keluargadosen');
            Route::get('/update|Keluargadosen/{id}', [KeluargaController::class , 'update'])->name('update|Keluargadosen');

            Route::get('/Pendidikantendik', [PendidikanTendikController::class , 'index'])->name('Pendidikantendik');
            Route::get('/create|Pendidikantendik', [PendidikanTendikController::class , 'create'])->name('create|Pendidikantendik');
            Route::get('/store|Pendidikantendik', [PendidikanTendikController::class , 'store'])->name('store|Pendidikantendik');
            Route::get('/destroy|Pendidikantendik/{id}', [PendidikanTendikController::class , 'destroy'])->name('destroy|Pendidikantendik');
            Route::get('/edit|Pendidikantendik/{id}', [PendidikanTendikController::class , 'edit'])->name('edit|Pendidikantendik');
            Route::get('/update|Pendidikantendik/{id}', [PendidikanTendikController::class , 'update'])->name('update|Pendidikantendik');

            Route::get('/Keluargatendik', [KeluargaTendikController::class , 'index'])->name('Keluargatendik');
            Route::get('/create|Keluargatendik', [KeluargaTendikController::class , 'create'])->name('create|Keluargatendik');
            Route::get('/store|Keluargatendik', [KeluargaTendikController::class , 'store'])->name('store|Keluargatendik');
            Route::get('/destroy|Keluargatendik/{id}', [KeluargaTendikController::class , 'destroy'])->name('destroy|Keluargatendik');
            Route::get('/edit|Keluargatendik/{id}', [KeluargaTendikController::class , 'edit'])->name('edit|Keluargatendik');
            Route::get('/update|Keluargatendik/{id}', [KeluargaTendikController::class , 'update'])->name('update|Keluargatendik');

            Route::get('/unit', [UnitController::class , 'indexadmin'])->name('unit');
            Route::get('/create|unit', [UnitController::class , 'create'])->name('create|unit');
            Route::get('/store|unit', [UnitController::class , 'store'])->name('store|unit');
            Route::get('/destroy|unit/{id}', [UnitController::class , 'destroy'])->name('destroy|unit');

            Route::get('/user', [UserController::class , 'indexadmin'])->name('user');
            Route::get('/create|user', [UserController::class , 'create'])->name('create|user');
            Route::get('/store|user', [UserController::class , 'store'])->name('store|user');
            Route::get('/destroy|user/{id}', [UserController::class , 'destroy'])->name('destroy|user');

            Route::get('/ubah_password/{id}', [AdminController::class , 'indexubahpassword'])->name('ubah_password');
            Route::post('/changepassword/{id}', [AdminController::class , 'store'])->name('changepassword');
            Route::post('/logout', [AdminController::class , 'logout'])->name('logout');
        }
        );
    });

Route::prefix('Dosen')->name('Dosen.')->group(function () {

    Route::middleware(['guest:Dosen', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.dosen.login')->name('login');
            Route::post('/check', [DosenControllers::class , 'check'])->name('check');
        }
        );

        Route::middleware(['auth:Dosen', 'PreventBackHistory'])->group(function () {
            Route::view('/home', 'dashboard.dosen.home')->name('home');
            Route::view('/profil', 'dashboard.dosen.master.profil')->name('profil');
            Route::get('/pendidikan', [DosenControllers::class , 'pendidikan'])->name('pendidikan');
            Route::get('/keluarga', [DosenControllers::class , 'keluarga'])->name('keluarga');
            Route::get('/perubahan', [DosenControllers::class , 'perubahan'])->name('perubahan');
            Route::get('/create|perubahan', [DosenControllers::class , 'createperubahan'])->name('create|perubahan');
            Route::post('/store|perubahan', [DosenControllers::class , 'storeperubahan'])->name('store|perubahan');

            Route::get('/ubah_password/{id}', [DosenControllers::class , 'indexubahpassword'])->name('ubah_password');
            Route::post('/changepassword/{id}', [DosenControllers::class , 'storechange'])->name('changepassword');
            Route::post('logout', [DosenControllers::class , 'logout'])->name('logout');
        }
        );
    });



Route::prefix('Tendik')->name('Tendik.')->group(function () {

    Route::middleware(['guest:Tendik', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.tendik.login')->name('login');
            Route::post('/check', [TendikController::class , 'check'])->name('check');
        }
        );

        Route::middleware(['auth:Tendik', 'PreventBackHistory'])->group(function () {
            Route::view('/home', 'dashboard.tendik.home')->name('home');
            Route::view('/profil', 'dashboard.tendik.master.profil')->name('profil');
            Route::get('/pendidikan', [TendikController::class , 'pendidikan'])->name('pendidikan');
            Route::get('/keluarga', [TendikController::class , 'keluarga'])->name('keluarga');
            Route::get('/perubahan', [TendikController::class , 'perubahan'])->name('perubahan');
            Route::get('/create|perubahan', [TendikController::class , 'createperubahan'])->name('create|perubahan');
            Route::post('/store|perubahan', [TendikController::class , 'storeperubahan'])->name('store|perubahan');
            Route::post('logout', [TendikController::class , 'logout'])->name('logout');
        }
        );
    });

Route::prefix('Unit')->name('Unit.')->group(function () {

    Route::middleware(['guest:Unit', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.Unit.login')->name('login');
            Route::post('/check', [UnitController::class , 'check'])->name('check');
        }
        );

        Route::middleware(['auth:Unit', 'PreventBackHistory'])->group(function () {
            Route::get('/home', [UnitController::class , 'home'])->name('home');
            Route::get('/proses', [UnitController::class , 'index'])->name('proses');
            Route::get('/create', [UnitController::class , 'createunit'])->name('create');
            Route::post('/store', [UnitController::class , 'storeunit'])->name('store');
            Route::get('/show/{id}', [UnitController::class , 'show'])->name('show');

            Route::post('logout', [UnitController::class , 'logout'])->name('logout');
        }
        );
    });