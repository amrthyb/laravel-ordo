<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'nilai', 'nama', 'isi'];

    // Relasi Many to One ke Cars
    public function car()
    {
        return $this->belongsTo(Cars::class, 'car_id');
    }
}
