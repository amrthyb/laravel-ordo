<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Manufactures extends Model
{
    protected $fillable = ['cars_id','nama', 'alamat'];

    // Relasi ke Cars (one to many)
    public function cars()
    {
        return $this->hasOne(Cars::class);
    }
}
