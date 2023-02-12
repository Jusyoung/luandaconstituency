<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChiefController;
use App\Http\Controllers\McaController;
use App\Http\Controllers\MpController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubchiefController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('front_end.welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('/administrator-entry-gate', [LoginController::class, 'showAdminLoginForm'])->name('login-administrator');
Route::get('/administrator-registry-gate', [RegisterController::class, 'showAdminRegisterForm'])->name('register-administrator');
Route::post('/administrator-registry-gate', [RegisterController::class,'createAdmin'])->name('administrator-registration');
Route::post('/login/admin', [LoginController::class,'adminLogin'])->name('admin-login');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin/')->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    });
});

// mp
Route::get('/login-as-mp', [LoginController::class, 'showMpLoginForm'])->name('login-mp');
Route::get('/mp-entry-gate', [RegisterController::class, 'showMpRegisterForm'])->name('register-mp');
Route::post('/mp-entry-gate', [RegisterController::class,'createMp'])->name('mp-registration');
Route::post('/login/mp', [LoginController::class,'mpLogin'])->name('mp-login');
Route::group(['middleware' => 'auth:mp'], function () {
    Route::prefix('mp/')->group(function () {
        Route::get('dashboard', [MpController::class, 'dashboard'])->name('mp-dashboard');
    });
});

// mca
Route::get('/login-as-mca', [LoginController::class, 'showMcaLoginForm'])->name('login-mca');
Route::get('/mca-entry-gate', [RegisterController::class, 'showMcaRegisterForm'])->name('register-mca');
Route::post('/mca-entry-gate', [RegisterController::class,'createMca'])->name('mca-registration');
Route::post('/login/mca', [LoginController::class,'mcaLogin'])->name('mca-login');
Route::group(['middleware' => 'auth:mca'], function () {
    Route::prefix('mca/')->group(function () {
        Route::get('dashboard', [McaController::class, 'dashboard'])->name('mca-dashboard');
    });
});
// chief
Route::get('/login-as-chief', [LoginController::class, 'showChiefLoginForm'])->name('login-chief');
Route::get('/chief-entry-gate', [RegisterController::class, 'showChiefRegisterForm'])->name('register-chief');
Route::post('/chief-entry-gate', [RegisterController::class,'createChief'])->name('chief-registration');
Route::post('/login/chief', [LoginController::class,'chiefLogin'])->name('chief-login');
Route::group(['middleware' => 'auth:chief'], function () {
    Route::prefix('chief/')->group(function () {
        Route::get('dashboard', [ChiefController::class, 'dashboard'])->name('chief-dashboard');
    });
});
// subchief
Route::get('/login-as-subchief', [LoginController::class, 'showSubChiefLoginForm'])->name('login-subchief');
Route::get('/subchief-entry-gate', [RegisterController::class, 'showSubChiefRegisterForm'])->name('register-subchief');
Route::post('/subchief-entry-gate', [RegisterController::class,'createSubChief'])->name('subchief-registration');
Route::post('/login/subchief', [LoginController::class,'subchiefLogin'])->name('subchief-login');
Route::group(['middleware' => 'auth:subchief'], function () {
    Route::prefix('subchief/')->group(function () {
        Route::get('dashboard', [SubchiefController::class, 'dashboard'])->name('subchief-dashboard');
    });
});
// resident
Route::get('/login-as-resident', [LoginController::class, 'showResidentLoginForm'])->name('login-resident');
Route::get('/resident-entry-gate', [RegisterController::class, 'showResidentRegisterForm'])->name('resident-mp');
Route::post('/resident-entry-gate', [RegisterController::class,'createResident'])->name('resident-registration');
Route::post('/login/resident', [LoginController::class,'residentLogin'])->name('resident-login');
Route::group(['middleware' => 'auth:resident'], function () {
    Route::prefix('resident/')->group(function () {
        Route::get('dashboard', [ResidentController::class, 'dashboard'])->name('resident-dashboard');
    });
});
// student
Route::get('/login-as-student', [LoginController::class, 'showStudentLoginForm'])->name('login-student');
Route::get('/student-entry-gate', [RegisterController::class, 'showStudentRegisterForm'])->name('register-student');
Route::post('/student-entry-gate', [RegisterController::class,'createStudent'])->name('student-registration');
Route::post('/login/student', [LoginController::class,'studentLogin'])->name('student-login');
Route::group(['middleware' => 'auth:student'], function () {
    Route::prefix('student/')->group(function () {
        Route::get('dashboard', [StudentController::class, 'dashboard'])->name('student-dashboard');
    });
});