<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Patients\PatientController;
use App\Http\Controllers\Invoices\EncounterController;
use App\Http\Controllers\Patients\DemographicController;

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

// Groups all the routes under the middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/patients/all', [DemographicController::class, 'index'])
        ->name('patients.list');
    Route::get('/patients/{patient}/ledger', [PatientController::class, 'show'])
        ->name('patients.show');

    Route::get('/patients/{patient}/encounters/{encounter}/detail', [EncounterController::class, 'show'])
        ->name('encounter.detail');
});

Route::redirect('/', 'login');

require __DIR__ . '/auth.php';
