<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Cars extends Model
{
    use HasFactory;

    // protected $table = 'cars';

    // protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan'];
    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan', 'manufactures_id', 'reviews_id'];

    // Relasi ke Manufactures (many to one)
    public function manufactures()
    {
        return $this->belongsTo(Manufactures::class, 'manufactures_id');
    }

    // Relasi One to Many (Satu mobil bisa memiliki banyak review)
    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    // public function feature()
    // {
    //     return $this->belongsToMany(Feature::class, 'car_features');
    // }
    public function features()
    {
        return $this->belongsToMany(Feature::class, 'car_features', 'car_id', 'feature_id');
    }
}
