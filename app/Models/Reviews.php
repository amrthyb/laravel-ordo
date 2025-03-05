<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = ['cars_id', 'nilai', 'nama', 'isi'];

    // Relasi Many to One (Setiap review milik satu mobil)
    public function car()
    {
        return $this->belongsTo(Cars::class);
    }
}
