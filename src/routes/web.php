<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponente;
use App\Http\Controllers\PonenteVistaController;

class PonenteVistaController extends Controller
{
    public function index(){
        $ponentes=Ponente::all();
        return view('ponentes.vista',compact('ponentes'));
    }
}

Route::get('/ponentes-vista',[PonenteVistaController::class,'index'])->name('ponentes.vista');
Route::post('/ponentes-vista',[PonenteVistaController::class,'store'])->name('ponentes.store');
Route::delete('/ponentes-vista/{id}', [PonenteVistaController::class, 'destroy'])->name('ponentes.destroy');

