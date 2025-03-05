<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['nama'];
    public function cars()
    {
        return $this->belongsToMany(Cars::class, 'car_features');

    }
}
