<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $table = 'cars'; // Pastikan tabel sesuai dengan nama di database

    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan']; // Pastikan field ini sesuai dengan database
}
