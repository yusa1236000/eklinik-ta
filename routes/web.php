<?php

use App\Http\Controllers\SelectController;
use App\Http\Livewire\Drug\Create;
use App\Http\Livewire\Drug\Index;
use App\Http\Livewire\Lab\Create as LabCreate;
use App\Http\Livewire\Lab\Index as LabIndex;
use App\Models\Immunization;
use App\Models\Familyplanning;
use App\Models\Pregnantmom;
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

$list_menu = [
    'lab' => 'lab',
    'drug' => 'obat',
    'patient' => 'pasien',
    'medicalrecord' => 'rekam-medis',
    'user' => 'user',
    'room' => 'ruangan',
    'diagnosis' => 'diagnosis',
    'queue' => 'antrian',
    'service' => 'layanan',
    'pregnantmom' => 'ibu-hamil',
    'familyplanning' => 'keluargaberencana',
    'immunization' => 'imunisasi'
];


Route::middleware(['auth:web'])->group(function () use ($list_menu) {
    Route::get('/show/{immunization}', \App\Http\Livewire\Immunization\Show::class)->name('immunization.show');
    Route::get('/show/{pregnantmom}', \App\Http\Livewire\Pregnantmom\Show::class)->name('pregnantmom.show');

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('antrian/process/{queue}', \App\Http\Livewire\Queue\Process::class)->name('queue.process');
    Route::get('antri/obat', \App\Http\Livewire\Queue\Drug::class)->name('queue.drug');
    Route::get('antri/obat/process/{queue}', \App\Http\Livewire\Drug\Process::class)->name('queue.drug.process');

    foreach ($list_menu as $key => $menu) {
        $name = ucfirst($key);
        $component = "App\\Http\\Livewire\\$name";
        Route::prefix($menu)->name("$key.")->group(function () use ($key, $component) {
            if (@class_exists("$component\\Index")) {
                Route::get('/', "$component\\Index")->name('index');
            }
            if (@class_exists("$component\\Create")) {
                Route::get('/create', "$component\\Create")->name('create');
            }
            if (@class_exists("$component\\Update")) {
                Route::get('/update/{' . $key . '}', "$component\\Update")->name('update');
            }
        });
    }
});
Route::get('login', \App\Http\Livewire\Auth\Login::class)->name('login');
Route::group(['prefix' => 'select'], function () {
    Route::get('doctor', [SelectController::class, 'doctor'])->name('select.doctor');
    Route::get('service', [SelectController::class, 'service'])->name('select.service');
});

// Route::get('/greet', 'UserController@greet');