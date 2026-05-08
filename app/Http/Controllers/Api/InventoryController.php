<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'API Inventory Berhasil Terhubung!',
            'status' => 200,
            'author' => 'Nurul-Ilmi'
        ]);
    }
}
