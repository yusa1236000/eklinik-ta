<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
// use App\Models\Room;
use Illuminate\Http\Request;
use \App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $room = Room::query()->get();
        if (count($room) == 0) {
        return response()->json(["message" => "Room Kosong"]);
        }
        return response()->json($room);
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
            'price' => 'required',
            'status' => 'required'
        ]);
        $room = Room::create($request->all());
        return response()->json($room);
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
        $room = Room::find($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $room->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ]);

        return response()->json($room);
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
        $room = Room::find($id)->delete();
        return response()->json($room);
    }
}
