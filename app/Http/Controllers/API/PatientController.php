<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patient = Patient::query()->get();
        if (count($patient) == 0) {
        return response()->json(["message" => "Patient Kosong"]);
        }
        return response()->json($patient);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'study' => 'required',
            'bpjs_number' => 'required',
            'phone_number' => 'required',
            'allergy' => 'required'
        ]);
        $patient = Patient::create($request->all());
        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $patient = Patient::find($id);

        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'study' => 'required',
            'bpjs_number' => 'required',
            'phone_number' => 'required',
            'allergy' => 'required'
        ]);
        $patient->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'profession' => $request->profession,
            'study' => $request->study,
            'bpjs_number' => $request->bpjs_number,
            'phone_number' => $request->phone_number,
            'allergy' => $request->allergy
        ]);

        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request)
    // {
    //     //
    //     $id = $request->input('id');
    //     Patient::find('id')->delete();
        
    // }
    public function destroy($id)
    {
        //
        $patient = Patient::find($id)->delete();
        return response()->json($patient);
        
    }
}
