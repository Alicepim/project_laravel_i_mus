<?php

use App\Http\Controllers\Character;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('formpage', function () {
    return view('formpage');
});

Route::get('/', [Character::class, 'pullData']);

Route::post('addCharacter', [Character::class, 'addCharacter'])->name('addCharacter');

Route::get('deleteData/{id}', [Character::class, 'deleteData'])->name('deleteData');

Route::get('editData/{id}', [Character::class, 'editData'])->name('editData');

Route::post('upDateCharacter/{id}', [Character::class, 'upDateCharacter'])->name('upDateCharacter');