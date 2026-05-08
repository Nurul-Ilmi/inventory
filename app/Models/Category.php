<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi secara massal
    protected $fillable = ['name'];

    // Relasi: Satu kategori memiliki banyak item (One to Many)
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}