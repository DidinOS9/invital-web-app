<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_nama_suami', 'nama_ayah_suami', 'nama_ibu_suami', 
        'nama_istri', 'nama_ayah_istri', 'nama_ibu_istri', 
        'hari_akad', 'tgl_akad', 'jam_mulai_akad', 'jam_selesai_akad', 'alamat_akad', 
        'hari_resepsi', 'tgl_resepsi', 'jam_mulai_resepsi', 'jam_selesai_resepsi', 'alamat_resepsi'
    ];

    public function namasuami()
    {
        return $this->belongsTo(User::class, 'id_nama_suami', 'id');
    }    
}
