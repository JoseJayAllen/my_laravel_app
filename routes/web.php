<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return redirect()->route('notes.index');
});

// Resource route for notes
Route::resource('notes', NoteController::class);

