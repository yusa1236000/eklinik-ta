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
         $documentations = Documentation::with('response', 'parameters')->get();
         return view('dokumentasi_api.index', compact(['documentations']));
    }
}

