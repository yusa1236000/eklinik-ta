<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Drug;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $drugs = Drug::query()->get();
        if (count($drugs) == 0) {
        return response()->json(["message" => "Obat Kosong"]);
        }
        return response()->json($drugs);
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
            'nama' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'min_stok' => 'required'
        ]);
        $drugs = Drug::create($request->all());
        return response()->json($drugs);
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
        $drugs = Drug::find($id);

        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'min_stok' => 'required'
        ]);
        $drugs->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'min_stok' => $request->min_stok
        ]);

        return response()->json($drugs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $drugs = Drug::find($id)->delete();
        return response()->json($drugs);
    }
}
