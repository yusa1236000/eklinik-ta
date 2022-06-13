<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index()
    {
        //
        $doctors = User::where("role","dokter")->get();
        if (count($doctors) == 0) {
            return response()->json(["message" => "Dokter Kosong"]);
        }
        return response()->json($doctors);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $doctors = User::create($request->all());
        return response()->json($doctors);
    }

}
