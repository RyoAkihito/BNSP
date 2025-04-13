<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SiswaController;

use App\Models\Berita;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Profil; // Correct the model name if it is 'Profil' instead of 'Profile'
use App\Models\Siswa;


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);

    Route::get('/register', [SesiController::class, 'register'])->name('register');
    Route::post('/register', [SesiController::class, 'registerAction'])->name('register.action');
});

// Protected routes (require authentication)
// Protected routes (require authentication)
Route::middleware(['auth'])->group(function () {

    // Admin dashboard
    Route::get('/admin', function () {
        $gurus = Guru::all();
        $totalGuru = Guru::count();
    
        $siswas = Siswa::all();
        $totalSiswa = Siswa::count();
    
        return view('admin', compact('gurus', 'totalGuru', 'siswas', 'totalSiswa'));
    })->middleware('UserAkses:admin')->name('admin');
    

    // Admin routes for 'guru' and 'siswa'
    Route::prefix('admin')->middleware('UserAkses:admin')->name('admin.')->group(function () {
        Route::resource('guru', GuruController::class);
    });

    Route::prefix('admin')->middleware('UserAkses:admin')->name('admin.')->group(function () {
        Route::resource('siswa', SiswaController::class);
    });

    // Logout route
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});


// Public routes (no authentication required)
Route::get('/', function() {
    return view('home');
})->name('home');

// Public routes with data
Route::get('/berita', function () {
    $beritas = Berita::all(); // Fetch all berita
    return view('index.berita', compact('beritas')); // Pass berita to the view
})->name('berita');

Route::get('/eskul', function () {
    $eskuls = Eskul::all(); // Fetch all eskul
    return view('index.eskul', compact('eskuls')); // Pass eskul to the view
})->name('eskul');

Route::get('/galeri', function () {
    $galeris = Galeri::all(); // Fetch all galeri
    return view('index.galeri', compact('galeris')); // Pass galeri to the view
})->name('galeri');

Route::get('/guru', function () {
    $gurus = \App\Models\Guru::all();
    return view('index.guru', compact('gurus'));
})->name('guru');


Route::get('/profil', function () {
    $profils = Profil::all(); // Fetch all profiles
    return view('index.profil', compact('profils')); // Pass all profiles to the view
})->name('profil');

Route::get('/siswa', function () {
    $siswas = Siswa::all(); // Fetch all siswa
    return view('index.siswa', compact('siswas')); // Pass siswa to the view
})->name('siswa');

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});