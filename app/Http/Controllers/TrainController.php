<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        // Ottenere i dati dal DB
        $trains = Train::all();

        return view('pages.trains.index', compact('trains'));
    }

    // Rotta localhost/houses/id
    public function show($id){
        $train = Train::findOrFail($id);

        return view('pages.trains.show', compact('train'));
    }
}
