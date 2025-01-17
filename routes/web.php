<?php

use App\Http\Controllers\Invitacion;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/invitacion/{invitado}', [Invitacion::class, 'invitadoEspecial'])->name('invitado');
Route::post('/asistencia', [Invitacion::class, 'asistencia'])->name('asistencia');


Route::get('/dashboard', [Invitacion::class, 'viewwelcome'])->name('dashboard');
Route::get('/invitaciones', [Invitacion::class, 'invitaciones'])->name('invitaciones');
Route::post('/invitacion', [Invitacion::class, 'telefono'])->name('telefono');
Route::get('/agregarinvitacion', [Invitacion::class, 'agregarinvitacion'])->name('agregarinvitacion');
Route::post('/agregarinvitacion', [Invitacion::class, 'agregarinvitacionpost'])->name('agregarinvitacionpost');
Route::get('/editinvitacion/{invitado}', [Invitacion::class, 'editinvitacion'])->name('editinvitacion');
Route::post('/editinvitacion', [Invitacion::class, 'editinvitacionpost'])->name('editinvitacionpost');
Route::get('/eliminarinvitacion/{invitado}', [Invitacion::class, 'eliminarinvitacion'])->name('eliminarinvitacion');








Route::get('/login', [Login::class, 'login'])->name('login');
Route::post('/login', [Login::class, 'login_post'])->name('login_post');
Route::get('/logout', [Login::class, 'logout'])->name('logout');