<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Unit\UnitController;
use App\Http\Controllers\MataKuliah\MataKuliahController;
use App\Http\Controllers\ProsesUsulanController;
use App\Http\Controllers\Kapprodi\KapprodiController;
use App\Http\Controllers\Staffprodi\StaffprodiController;
use App\Http\Controllers\DataDosen\DataDosenController;
use App\Http\Controllers\PembagianMatakuliah\PembagianMatakuliahController;
use App\Http\Controllers\Surattugasmengajar\SurattugasmengajarController;
use App\Http\Controllers\Staffumum\StaffumumController;
use App\Http\Controllers\Direktur\DirekturController;
use App\Http\Controllers\Wadir\WadirController;
use App\Http\Controllers\Koordinator\KoordinatorController;
use App\Http\Controllers\Usulansk\UsulanskController;
use App\Http\Controllers\Suratskbebanmengajar\SuratskbebanmengajarController;
use App\Http\Controllers\SKBebanmengajar\SKBebanmengajarController;


use Illuminate\Support\Facades\Auth;
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
            Route::view('/login', 'dashboard.admin.login')->name('login');
            Route::post('/check', [AdminController::class , 'check'])->name('check');

        }
        );
        Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
            Route::get('/home', [AdminController::class , 'index'])->name('home');
            Route::get('/usulansurat', [AdminController::class , 'usulansurat'])->name('usulansurat');
            Route::get('/showusulanmengajarstaffAK/{id}', [AdminController::class , 'showusulanmengajar'])->name('showusulanmengajarstaffAK');
            Route::get('/print|usulantugasbebanmengajar/{id}', [AdminController::class , 'usulantugasbebanmengajar'])->name('print|usulantugasbebanmengajar');
            Route::get('/print|suratpermohonan/{id}', [AdminController::class , 'printsuratptugas'])->name('print|suratpermohonan');

            Route::get('/showsuratstaffAK/{id}', [AdminController::class , 'showsurat'])->name('showsuratstaffAK');
            Route::get('/lembardisposisistaffAK/{id}', [AdminController::class , 'lembaracc'])->name('lembardisposisistaffAK');
            Route::get('/surattugasbebanmengajarstaffAK/{id}', [AdminController::class , 'tugasbebanmengajar'])->name('surattugasbebanmengajarstaffAK');
            Route::get('/storesurattugas/{id}', [PembagianMatakuliahController::class , 'surattugas'])->name('storesurattugas');

            Route::get('/usulanskbebanmengajar', [AdminController::class , 'usulansk'])->name('usulanskbebanmengajar');
            Route::get('/lampiransk/{id}', [AdminController::class , 'lampiran'])->name('lampiransk');
            Route::get('/suratusulanskbebanmengajar/{id}', [AdminController::class , 'suratskbebanmengajar'])->name('suratusulanskbebanmengajar');
            Route::get('/print|suratusulanSKbebanmengajar/{id}', [AdminController::class , 'printsuratuSK'])->name('print|suratusulanSKbebanmengajar');
            Route::get('/lembaraccusulansk/{id}', [AdminController::class , 'lembaraccusulansk'])->name('lembaraccusulansk');


            Route::get('/unit', [UnitController::class , 'indexadmin'])->name('unit');
            Route::get('/create|unit', [UnitController::class , 'create'])->name('create|unit');
            Route::get('/store|unit', [UnitController::class , 'store'])->name('store|unit');
            Route::get('/destroy|unit/{id}', [UnitController::class , 'destroy'])->name('destroy|unit');
            Route::get('/prosessurattugas', [ProsesUsulanController::class , 'prosessurattugas'])->name('prosessurattugas');
            Route::get('/show/{id}', [ProsesUsulanController::class , 'show'])->name('show');
            Route::get('/update/{id}', [ProsesUsulanController::class , 'update'])->name('update');
            Route::post('/updateproses/{id}', [ProsesUsulanController::class , 'updateproses'])->name('updateproses');


            Route::get('/user', [UserController::class , 'indexadmin'])->name('user');
            Route::get('/create|user', [UserController::class , 'create'])->name('create|user');
            Route::get('/store|user', [UserController::class , 'store'])->name('store|user');
            Route::get('/destroy|user/{id}', [UserController::class , 'destroy'])->name('destroy|user');

            Route::get('/sk', [AdminController::class , 'sk'])->name('sk');
            Route::get('/tambahsk', [AdminController::class , 'tambahSK'])->name('tambahsk');
            Route::get('/detailsk/{id}', [AdminController::class , 'detailSK'])->name('detailsk');
            Route::get('/printsk/{id}', [AdminController::class , 'printSK'])->name('printsk');
            Route::get('/storesk', [SKBebanmengajarController::class , 'storesk'])->name('storesk');


            Route::get('/ubah_password/{id}', [AdminController::class , 'indexubahpassword'])->name('ubah_password');
            Route::post('/changepassword/{id}', [AdminController::class , 'store'])->name('changepassword');
            Route::post('/logout', [AdminController::class , 'logout'])->name('logout');
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

            Route::get('/kapprodiproses', [KapprodiController::class , 'index'])->name('kapprodiproses');
            Route::get('/datadosen', [KapprodiController::class , 'datadosen'])->name('datadosen');
            Route::get('/matakuliah', [KapprodiController::class , 'matakuliah'])->name('matakuliah');
            Route::get('/usulanmengajar', [KapprodiController::class , 'usulanmengajar'])->name('usulanmengajar');
            Route::get('/showusulanmengajar/{id}', [KapprodiController::class , 'showusulanmengajar'])->name('showusulanmengajar');
            Route::get('/storedatadosen', [DataDosenController::class , 'storedatadosen'])->name('storedatadosen');
            Route::get('/storematakuliah', [MataKuliahController::class , 'storematakuliah'])->name('storematakuliah');
            Route::get('/storepembagianmatakuliah', [PembagianMatakuliahController::class , 'storepembagianmatakuliah'])->name('storepembagianmatakuliah');
            Route::post('/kaprodidisposisi/{id}', [PembagianMatakuliahController::class , 'disposisi'])->name('kaprodidisposisi');
            Route::get('/showsuratbebanmengajar/{id}', [KapprodiController::class , 'suratskbebanmengajar'])->name('showsuratbebanmengajar');
            Route::get('/suratbebanmengajar/{id}', [KapprodiController::class , 'suratskbebanmengajarkaprodi'])->name('suratbebanmengajar');

            Route::get('/usulansk', [KapprodiController::class , 'usulansk'])->name('usulansk');
            Route::post('/storeusulansk', [SuratskbebanmengajarController::class , 'storeusulansk'])->name('storeusulansk');
            Route::get('/lampirankapprodi/{id}', [KapprodiController::class , 'lampirankapprodi'])->name('lampirankapprodi');
            Route::get('/destroysk/{id}', [SuratskbebanmengajarController::class , 'destroy'])->name('destroysk');
            Route::post('/disposisisuratpermohonansk/{id}', [SuratskbebanmengajarController::class , 'disposisi'])->name('disposisisuratpermohonansk');
            Route::get('/skkapprodi', [KapprodiController::class , 'sk'])->name('skkapprodi');
            Route::get('/detailskkapprodi/{id}', [KapprodiController::class , 'detailSK'])->name('detailskkapprodi');


            Route::get('/staffprodi', [StaffprodiController::class , 'index'])->name('staffprodi');
            Route::get('/usulanmengajarstaff', [StaffprodiController::class , 'usulanmengajar'])->name('usulanmengajarstaff');
            Route::get('/showusulanmengajarstaff/{id}', [StaffprodiController::class , 'showusulanmengajar'])->name('showusulanmengajarstaff');
            Route::get('/suratpermohonanbebanmengajar/{id}', [StaffprodiController::class , 'suratpermohonanbebanmengajar'])->name('suratpermohonanbebanmengajar');
            Route::post('/staffsurattugas/{id}', [PembagianMatakuliahController::class , 'nosurattugas'])->name('staffsurattugas');


            Route::get('/storesurattugas', [SurattugasmengajarController::class , 'storesurattugas'])->name('storesurattugas');
            Route::get('/usulansuratsk', [StaffprodiController::class , 'usulansk'])->name('usulansuratsk');
            Route::get('/suratskbebanmengajar/{id}', [StaffprodiController::class , 'suratskbebanmengajar'])->name('suratskbebanmengajar');
            Route::get('/storesuratsk/{id}', [SuratskbebanmengajarController::class , 'storesuratsk'])->name('storesuratsk');
            Route::get('/lampiranstaff/{id}', [StaffprodiController::class , 'lampiranstaff'])->name('lampiranstaff');



            Route::get('/staffumum', [StaffumumController::class , 'index'])->name('staffumum');
            Route::get('/showusulanmengajarstaffumum/{id}', [StaffumumController::class , 'showusulanmengajar'])->name('showusulanmengajarstaffumum');
            Route::get('/showsurat/{id}', [StaffumumController::class , 'showsurat'])->name('showsurat');
            Route::get('/usulanskstaffumum', [StaffumumController::class , 'usulansk'])->name('usulanskstaffumum');
            Route::get('/lampiranstaffumum/{id}', [StaffumumController::class , 'lampirankapprodi'])->name('lampiranstaffumum');
            Route::get('/suratbebanmengajarstaffumum/{id}', [StaffumumController::class , 'suratskbebanmengajarstaffumum'])->name('suratbebanmengajarstaffumum');

            Route::get('/staffumumsuratskbebanmengajar', [StaffumumController::class , 'suratskbebanmengajar'])->name('staffumumsuratskbebanmengajar');


            Route::get('/direktur', [DirekturController::class , 'index'])->name('direktur');
            Route::get('/showusulanmengajardirektur/{id}', [DirekturController::class , 'showusulanmengajar'])->name('showusulanmengajardirektur');
            Route::get('/showsuratdirektur/{id}', [DirekturController::class , 'showsurat'])->name('showsuratdirektur');
            Route::get('/lembardisposisi/{id}', [DirekturController::class , 'lembaracc'])->name('lembardisposisi');
            Route::get('/surattugasbebanmengajar/{id}', [DirekturController::class , 'surattugasbebanmengajar'])->name('surattugasbebanmengajar');
            Route::get('/updatelembardisposisi/{id}', [PembagianMatakuliahController::class , 'updatelembardisposisi'])->name('updatelembardisposisi');
            Route::post('/disposisidirektur/{id}', [PembagianMatakuliahController::class , 'disposisidirektur'])->name('disposisidirektur');
            Route::post('/disposisiSKbebanmengajar/{id}', [SKBebanmengajarController::class , 'disposisi'])->name('disposisiSKbebanmengajar');

            Route::get('/usulanskdirektur', [DirekturController::class , 'usulansk'])->name('usulanskdirektur');
            Route::get('/lampirandirektur/{id}', [DirekturController::class , 'lampirandirektur'])->name('lampirandirektur');
            Route::get('/suratbebanmengajardirektur/{id}', [DirekturController::class , 'suratskbebanmengajardirektur'])->name('suratbebanmengajardirektur');
            Route::get('/lembaraccusulansk/{id}', [DirekturController::class , 'lembaraccusulansk'])->name('lembaraccusulansk');
            Route::get('/updatedisposisiusulansk/{id}', [SuratskbebanmengajarController::class , 'updatelembardisposisi'])->name('updatedisposisiusulansk');
            Route::get('/skdirektur', [DirekturController::class , 'sk'])->name('skdirektur');
            Route::get('/detailskdirektur/{id}', [DirekturController::class , 'detailSK'])->name('detailskdirektur');

            Route::get('/wadir', [WadirController::class , 'index'])->name('wadir');
            Route::get('/showusulanmengajarwadir/{id}', [WadirController::class , 'showusulanmengajar'])->name('showusulanmengajarwadir');
            Route::get('/showsuratwadir/{id}', [WadirController::class , 'showsurat'])->name('showsuratwadir');
            Route::get('/lembardisposisiwadir/{id}', [WadirController::class , 'lembaracc'])->name('lembardisposisiwadir');
            Route::get('/updatelembardisposisiwadir/{id}', [PembagianMatakuliahController::class , 'updatelembardisposisiwadir'])->name('updatelembardisposisiwadir');

            Route::get('/usulanskwadir', [WadirController::class , 'usulansk'])->name('usulanskwadir');
            Route::get('/lampiranwadir/{id}', [WadirController::class , 'lampiranwadir'])->name('lampiranwadir');
            Route::get('/suratbebanmengajarwadir/{id}', [WadirController::class , 'suratskbebanmengajarwadir'])->name('suratbebanmengajarwadir');
            Route::get('/lembaraccskwadir/{id}', [WadirController::class , 'lembaraccusulansk'])->name('lembaraccskwadir');
            Route::get('/updatelembardisposisiwadirsk/{id}', [SuratskbebanmengajarController::class , 'updatelembardisposisiwadir'])->name('updatelembardisposisiwadirsk');
            Route::get('/skwadir', [DirekturController::class , 'sk'])->name('skwadir');
            Route::get('/detailskwadir/{id}', [DirekturController::class , 'detailSK'])->name('detailskwadir');


            Route::get('/koordinator', [KoordinatorController::class , 'index'])->name('koordinator');
            Route::get('/showusulanmengajarkoord/{id}', [KoordinatorController::class , 'showusulanmengajar'])->name('showusulanmengajarkoord');
            Route::get('/showsuratkoord/{id}', [KoordinatorController::class , 'showsurat'])->name('showsuratkoord');
            Route::get('/lembardisposisikoord/{id}', [KoordinatorController::class , 'lembaracc'])->name('lembardisposisikoord');

            Route::get('/koordinatorsuratskbebanmengajar', [StaffprodiCoKoordinatorControllerntroller::class , 'suratskbebanmengajar'])->name('koordinatorsuratskbebanmengajar');
            Route::get('/skkoordinator', [KoordinatorController::class , 'sk'])->name('skkoordinator');
            Route::get('/detailskkoordinator/{id}', [KoordinatorController::class , 'detailSK'])->name('detailskkoordinator');



            Route::get('/print|suratSKbebanmengajar/{id}', [UnitController::class , 'printsuratSK'])->name('print|suratSKbebanmengajar');
            Route::get('/print|suratusulanSKbebanmengajar/{id}', [UnitController::class , 'printsuratuSK'])->name('print|suratusulanSKbebanmengajar');
            Route::get('/print|suratpermohonan/{id}', [UnitController::class , 'printsuratptugas'])->name('print|suratpermohonan');
            Route::get('/print|usulantugasbebanmengajar/{id}', [UnitController::class , 'usulantugasbebanmengajar'])->name('print|usulantugasbebanmengajar');
            Route::get('/showpenerbitsk/{id}', [UnitController::class , 'showSK'])->name('showpenerbitsk');
            Route::get('/destroy{id}', [ProsesUsulanController::class , 'destroy'])->name('destroy');
            Route::get('/printsurat', [KapprodiController::class , 'printsurat'])->name('printsurat');
            Route::get('/printsk/{id}', [UnitController::class , 'printSK'])->name('printsk');

            Route::post('logout', [UnitController::class , 'logout'])->name('logout');
        }
        );
    });