<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    // Mengambil semua item beserta data kategorinya (Eager Loading)
    public function index()
    {
        return response()->json(Item::with('category')->get());
    }

    // Menyimpan item baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $item = Item::create($validated);
        return response()->json($item, 201);
    }

    // Menampilkan satu item berdasarkan ID
    public function show(Item $item)
    {
        return response()->json($item->load('category'));
    }

    // Mengubah data item
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'quantity' => 'integer|min:0',
            'price' => 'numeric|min:0',
            'category_id' => 'exists:categories,id',
        ]);

        $item->update($validated);
        return response()->json($item);
    }

    // Menghapus item
    public function destroy(Item $item)
    {
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}