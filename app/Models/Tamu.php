<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_suami', 'nama_tamu', 'kelamin', 'alamat', 'status'
    ];

    public function namasuami()
    {
        return $this->belongsTo(User::class, 'id_suami', 'id');
    }    
}
