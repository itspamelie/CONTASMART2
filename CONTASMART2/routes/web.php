<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CuotasimssController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\DatosinicialesController;
use App\Http\Controllers\IsrController;
use App\Http\Controllers\ImssController;
use App\Http\Controllers\AguinaldoController;
use App\Http\Controllers\CostoimssController;
use App\Http\Controllers\SdiController;
use App\Http\Controllers\ProfileController;


//SESIONES PROTEGIDAS DEL USUARIO
Route::get('/', [IndexController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::post('/saveproyect', [DashboardController::class,'store']);
Route::post('/updateproyect', [DashboardController::class,'update']);
Route::post('/deleteproyect', [DashboardController::class, 'destroy']);
Route::post('/editarusuario', [ProfileController::class, 'update']);
Route::post('/updateyear', [DatosinicialesController::class, 'update']);
Route::post('/addnomina', [DatosinicialesController::class, 'store']);


Route::get('/nomina', [RosterController::class,'index']);
Route::get('/cuotasimss', [CuotasimssController::class,'index']);
Route::get('/datosiniciales/{id}', [DatosinicialesController::class, 'show'])->name('datosiniciales.show');
Route::get('/isr/{id}', [IsrController::class,'index'])->name('isr.show');
Route::get('/imss', [ImssController::class,'index']);
Route::get('/aguinaldo', [AguinaldoController::class,'index']);
Route::get('/costoimss', [CostoimssController::class,'index']);
Route::get('/sdi/{id}', [SdiController::class,'index']);
Route::get('/perfil', [ProfileController::class,'index']);


//Login,registro y pagina principal
Route::get('/login', function () {   return view('login');});
Route::get('/register', function () { return view('register');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//vistas sin login ni controlador (por ahora)
Route::get('/introduction', function () {
    return view('introduction');
});
Route::get('/tutoriales', function () {
    return view('tutoriales');
});
Route::get('/herramientas', function () {
    return view('herramientas');
});



//Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
