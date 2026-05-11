<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'floor', 'is_available', 'room_type_id'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}