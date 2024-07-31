<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DistrictLc;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
//normal user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','lc'])->name('dashboard');

// OKCL(SUper Admin)
Route::get('/okcl/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified','okcl'])->name('okcl.dashboard');

// dlc(Admin)
Route::get('/dlc/dashboard', function () {
    return view('dlc.dashboard');
})->middleware(['auth', 'verified','dlc'])->name('dlc.dashboard');



#Route::get('/admin/dashboard',[HomeController::class,'index'])->middleware(['auth','okcl']);
#Route::get('/dlc/dashboard',[DistrictLc::class,'index'])->middleware(['auth','dlc']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::post('/toggle-dark-mode', function (Request $request) {
    $currentMode = session('dark_mode', 'light');
    $newMode = $currentMode === 'dark' ? 'light' : 'dark';
    session(['dark_mode' => $newMode]);
    return response()->noContent();
});
