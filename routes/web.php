<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDatakaderController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomsatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);
Route::get('/komsatunram', [KomsatController::class, 'index']);
Route::get('/komsatbungkarno', [KomsatController::class, 'bungkarno']);
Route::get('/komsatfstt', [KomsatController::class, 'fstt']);
Route::get('/komsattrisakti', [KomsatController::class, 'trisakti']);
Route::get('/tentang', [TentangController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //untuk yg belum terautentikasi (guest)
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); //untuk yang sudah terauntetikasi (auth)

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']); //untuk yang sudah terauntetikasi (auth)
    Route::get('/dashboard/post/checkSlug', [DashboardBeritaController::class, 'checkSlug']);

    Route::resource('/dashboard/post', DashboardBeritaController::class)->parameters(['post' => 'berita'])->middleware('auth');
    Route::get('/dashboard/datakader', [DashboardDatakaderController::class, 'index']);
    Route::resource('/dashboard/kader', DashboardDatakaderController::class)->parameters(['kader' => 'datakader'])->middleware('auth');

});
// Untuk user login
Route::middleware(['auth'])->group(function () {
    Route::get('/pendaftaran-kader', [DashboardDatakaderController::class, 'createUser']);
    Route::post('/pendaftaran-kader', [DashboardDatakaderController::class, 'storeUser']);

    // Halaman info pribadi user (pakai view admin yang sudah ada)
    Route::get('/datakader/{datakader}', [DashboardDatakaderController::class, 'showUser'])
        ->name('datakader.showUser');
});

Route::get('/artikel', function () {
    return view(
        'fitur.artikel',
        [
            "title" => "Artikel"
        ]
    );
});
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/dashboard/post/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->middleware('auth');

// Route::resource('/dashboard/post', DashboardBeritaController::class)->parameters(['post' => 'berita'])->middleware('auth');