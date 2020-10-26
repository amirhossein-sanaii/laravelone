<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProgectController;
use \App\Http\Controllers\AddNoteController;
use \App\Http\Controllers\AddTaskController;
use \App\Http\Controllers\AddController;
use \App\Http\Controllers\SettingTaskController;
use \App\Http\Controllers\AjaxController;
use App\Models\progect;

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
    return redirect()->route('progect.index');
});

Route::resource('progect',AddProgectController::class);

Route::resource('note',AddNoteController::class);

Route::get('task/{id}', [AddController::class, 'show'])->name('show');
Route::get('task/{id}/add', [AddController::class, 'add'])->name('add');
Route::post('task/{id}/addtask/{ops}', [AddController::class, 'create'])->name('create');
Route::delete('task/delete/{id}', [AddController::class, 'delete'])->name('delete');
Route::get('task/edit/{id}', [AddController::class, 'edit'])->name('edit');
Route::put('task/edit/{id}', [AddController::class, 'update'])->name('update');
Route::get('task/setting/{id}', [SettingTaskController::class, 'setting'])->name('setting');
Route::post('task/addsetting/{id}', [SettingTaskController::class, 'addsetting'])->name('addsetting');

Route::get('amir',function (){
    return view('amir');
});



Route::get('ajax-request', [AjaxController::class, 'create']);
Route::post('ajax-request', [AjaxController::class, 'store']);

