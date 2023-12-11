<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\UpdateUserController;

Route::get('/', [Controller::class, 'login'])->name('login');

Route::view('/personal', 'index')->name('index');

Route::get('/personal/personalData', [Controller::class, 'personalData'])->name('personalData');
Route::get('/personal/workData', [Controller::class, 'workData'])->name('workData');
Route::get('/personal/familyData', [Controller::class, 'familyData'])->name('familyData');
Route::get('/personal/payData', [Controller::class, 'payData'])->name('payData');

Route::get('/personal/reportPersonal', [Controller::class, 'reportPersonal'])->name('reportPersonal');

Route::get('/personal/asistencia', [Controller::class, 'asistencia'])->name('asistencia');

Route::get('/personal/pago', [Controller::class, 'pago'])->name('pago');

Route::get('/personal/reportPago', [Controller::class, 'reportPago'])->name('reportPago');

// POST save form DB
Route::post('/formPersonal', [CreateUserController::class, 'formPersonal'])->name('formPersonal');
Route::post('/formWork', [CreateUserController::class, 'formWork'])->name('formWork');
Route::post('/formFamily', [CreateUserController::class, 'formFamily'])->name('formFamily');
Route::post('/formPay', [CreateUserController::class, 'create'])->name('create');

// GET LOCATION
Route::get('/get-provincias/{regionId}', [Controller::class, 'getProvincias']);
Route::get('/get-distritos/{provinciaId}', [Controller::class, 'getDistritos']);

//UPDATE PERSON
Route::put('/update-data-person', [UpdateUserController::class, 'updateDataPerson'])->name('updateDataPerson');
