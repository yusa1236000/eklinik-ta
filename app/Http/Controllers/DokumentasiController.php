<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Patient;
use App\Models\Parameter;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    //
    public function index()
    {
         //get dokumentasi
         $documentations = Documentation::all();
         $parameter = Parameter::all();
        //  return $parameter;
        // dd($documentations);
         //render view with dokumantasi
         return view('dokumentasi_api.index', compact(['documentations', 'parameter']));
    }
}

