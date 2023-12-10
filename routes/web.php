<?php

use App\Http\Controllers\beranda;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\KritikSaranAdminController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\ProfilUserController;
use App\Http\Controllers\SakitAdminController;
use App\Http\Controllers\SakitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DormMateController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\KurveController;
use App\Http\Controllers\KurveMassalController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\AlergiController;



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
//rules of dorm
Route::get('guest-aturanumum', function () {
    return view('aturanumum');
});
//data kamar
Route::get('guest-halamankamar', function () {
    return view('kamar');
});
//data kamar
Route::get('guest-kamarrusun1', [DormMateController::class, 'lihat1'])->name('lihat1');
Route::get('guest-kamarrusun2', [DormMateController::class, 'lihat2'])->name('lihat2');
Route::get('guest-kamarrusun3', [DormMateController::class, 'lihat3'])->name('lihat3');
Route::get('guest-kamarrusun4', [DormMateController::class, 'lihat4'])->name('lihat4');
Route::get('guest-kamarpniel', [DormMateController::class, 'lihatp'])->name('lihatp');
Route::get('guest-kamarsilo', [DormMateController::class, 'lihats'])->name('lihats');
Route::get('guest-kamarkapernaum', [DormMateController::class, 'lihatk'])->name('lihatk');
Route::get('guest-kamardantob', [DormMateController::class, 'lihatdt'])->name('lihatdt');
//alergi
Route::get('guest-alergic', [AlergiController::class, 'lihat'])->name('lihat');

// Route::get('login',[LoginController::class,'login'])->name('login');
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');

});

// Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
// Route::post('/registrasiproses', [RegistrasiController::class, 'registerProses'])->name('registrasi-proses');

//admin
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:admin']], function () {
        Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
        Route::post('/registrasiproses', [RegistrasiController::class, 'registerProses'])->name('registrasi-proses');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('eval', [DashboardController::class, 'eval'])->name('eval');
        Route::resource('matedorm', DormMateController::class);
        Route::resource('evaluation', EvaluationController::class);
        Route::resource('kurvey', KurveController::class);
        Route::resource('kurvemassal', KurveMassalController::class);
        Route::resource('renungan', RenunganController::class);
        Route::resource('alergi', AlergiController::class);
        Route::resource('datadok', DokumenController::class);
        Route::resource('addsakit', SakitAdminController::class);
        Route::resource('kritiksaran', KritikSaranAdminController::class);

    });


    //user
    Route::group(['middleware' => ['cekUserLogin:user']], function () {
        Route::get('beranda', [beranda::class, 'index']);
        Route::get('halamankamar', function () {
            return view('user.halamankamar');
        });

        //data kamar
        Route::get('kamarrusun1', [DormMateController::class, 'lihat1'])->name('kamar1');
        Route::get('kamarrusun2', [DormMateController::class, 'index2'])->name('kamar2');
        Route::get('kamarrusun3', [DormMateController::class, 'index3'])->name('kamar3');
        Route::get('kamarrusun4', [DormMateController::class, 'index4'])->name('kamar4');
        Route::get('kamarpniel', [DormMateController::class, 'indexp'])->name('kamarxp');
        Route::get('kamarsilo', [DormMateController::class, 'indexs'])->name('kamarxs');
        Route::get('kamarkapernaum', [DormMateController::class, 'indexk'])->name('kamark');
        Route::get('kamardantob', [DormMateController::class, 'indexdt'])->name('kamardt');

        //kurve
        Route::get('kurverusun1', [KurveController::class, 'index1'])->name('index1');
        Route::get('kurverusun2', [KurveController::class, 'index2'])->name('index2');
        Route::get('kurverusun3', [KurveController::class, 'index3'])->name('index3');
        Route::get('kurverusun4', [KurveController::class, 'index4'])->name('index4');
        Route::get('kurvepniel', [KurveController::class, 'indexp'])->name('indexp');
        Route::get('kurvesilo', [KurveController::class, 'indexs'])->name('indexs');
        Route::get('kurvekapernaum', [KurveController::class, 'indexk'])->name('indexk');
        Route::get('kurvedantob', [KurveController::class, 'indexdt'])->name('indexdt');
        Route::get('kurvemasal', [KurveMassalController::class, 'indexuser'])->name('kurvemasal');

        //renungan
        Route::get('ibadah', [RenunganController::class, 'indexuser'])->name('indexuser');

        //dokumen
        Route::get('document', [DokumenController::class, 'alldata'])->name('alldata');
        Route::get('document/{id}', [DokumenController::class, 'download'])->name('download');

        //alergi
        Route::get('alergic', [AlergiController::class, 'alldata'])->name('alergic');
        Route::get('alergic/data', [AlergiController::class, 'adddatauser'])->name('add.user');
        Route::post('alergic/simpan', [AlergiController::class, 'simpanuser'])->name('simpanuser');


        Route::get('home', function () {
            return view('user.beranda');
        });

        Route::get('/halamankamar', [beranda::class, 'index_kamar'])->name('halamankamar');


        Route::get('kurveyharian', function () {
            return view('user.kurveyharian');
        });

        //evaluasi
        Route::get('eval', function () {
            return view('user.evaluation');
        });
        Route::get('evalr1', [EvaluationController::class, 'index1'])->name('evalr1');
        Route::get('evalr2', [EvaluationController::class, 'index2'])->name('evalr2');
        Route::get('evalr3', [EvaluationController::class, 'index3'])->name('evalr3');
        Route::get('evalr4', [EvaluationController::class, 'index4'])->name('evalr4');
        Route::get('evalp', [EvaluationController::class, 'indexp'])->name('evalp');
        Route::get('evals', [EvaluationController::class, 'indexs'])->name('evals');
        Route::get('evalk', [EvaluationController::class, 'indexk'])->name('evalk');
        Route::get('evaldt', [EvaluationController::class, 'indexdt'])->name('evaldt');


        // sakit
        Route::resource('sakit', SakitController::class);

        // kritik saran
        Route::resource('userkritiksaran', KritikSaranController::class);

        // profil
        Route::resource('profile', ProfilUserController::class);

        //rules of dorm
        Route::get('aturanumum', function () {
            return view('user.aturanumum');
        });
        Route::get('aturanputri', function () {
            return view('user.aturanputri');
        });
        Route::get('aturanaskembar', function () {
            return view('user.aturanaskembar');
        });
        Route::get('aturanasantiokhia', function () {
            return view('user.aturanasantiokhia');
        });
        Route::get('aturanasrus1', function () {
            return view('user.aturanasrus1');
        });
        Route::get('aturanasmandiri', function () {
            return view('user.aturanasmandiri');
        });

        // ketentuan umum
        Route::get('ketentuan-umum', function () {
            return view('user.ketentuan-umum');
        });
        Route::get('halamanasrama', function () {
            return view('user.halamanasrama');
        });

    });
});