<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    public function index() { return response()->json(HotelRoom::with('roomType')->get(), 200); }
    public function store(Request $request) {
        $hotelRoom = HotelRoom::create($request->all());
        return response()->json($hotelRoom, 201);
    }
    public function show(HotelRoom $hotelRoom) { return response()->json($hotelRoom->load('roomType'), 200); }
    public function update(Request $request, HotelRoom $hotelRoom) {
        $hotelRoom->update($request->all());
        return response()->json($hotelRoom, 200);
    }
    public function destroy(HotelRoom $hotelRoom) {
        $hotelRoom->delete();
        return response()->json(null, 204);
    }
}
