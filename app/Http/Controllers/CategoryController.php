<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Mengambil semua data kategori
    public function index()
    {
        return response()->json(Category::all());
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:categories|max:255',
        ]);

        $category = Category::create($validated);
        return response()->json($category, 201);
    }

    // Menampilkan satu kategori berdasarkan ID
    public function show(Category $category)
    {
        return response()->json($category);
    }

    // Mengubah data kategori
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:categories,name,' . $category->id,
        ]);

        $category->update($validated);
        return response()->json($category);
    }

    // Menghapus kategori
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}