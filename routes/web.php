<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
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


Route::middleware(['auth:masyarakat,petugas'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);

    /**
     * PetugasController
     */
    Route::controller(PetugasController::class)->group(function () {
    });

    /**
     * MasyrakatController
     */
    Route::controller(MasyarakatController::class)->group(function () {
        Route::get('/masyarakat', 'index')
            ->name('masyarakat')
            ->middleware(['only-petugas']);  //middleware Khusus Petugas
    });

    /**
     * PengaduanController
     */
    Route::controller(PengaduanController::class)->group(function () {
        // Menampilkan Halaman List Pengaduan
        Route::get('/pengaduan', 'index')
            ->name('pengaduan.index');

        // Membuat Pegaduan Baru (Khusus Masyarakat)
        Route::post('/pengaduan', 'store')
            ->name('pengaduan.store')
            ->middleware('only-masyarakat');  //middleware Khusus Masyarakat

        // Menampilkan Halaman Detail Pengaduan
        Route::get('/{username}/pengaduan/{id_pengaduan}', 'show')
            ->name("pengaduan.show");
    });

    /**
     * TanggapanController
     */
    Route::controller(TanggapanController::class)->group(function () {
        // Menampilkan Halaman List Pengaduan
        Route::get('/tanggapan', 'index')
            ->name('tanggapan.index');

        // Membuat Tanggapan Baru (Khusus Petugas)
        Route::post('/{username}/pengaduan/{id_pengaduan}/tanggapan', 'store')
            ->name('tanggapan.store')
            ->middleware(['only-petugas']); //middleware Khusus Petugas
    });

    /**
     * TanggapanController
     */
    Route::controller(ChatController::class)->group(function () {
        // Route::get('/{username}/pengaduan/{id_pengaduan}/chat', 'index')
        //     ->name("chat.index");

        // Membuat Pesan Baru
        Route::post('/{username}/pengaduan/{id_pengaduan}/chat', 'store')
            ->name('chat.store');
    });


    Route::get('/only-masyarakat', function () {
        dd('only-masyarakat');
    })->middleware('only-masyarakat');
    Route::get('/only-admin', function () {
        dd('only-admin');
    })->middleware('only-admin');
    Route::get('/only-petugas', function () {
        dd('only-petugas');
    })->middleware('only-petugas');
});

require __DIR__ . '/auth.php';
