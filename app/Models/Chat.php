<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_chat';
    public $incrementing = false;

    protected $fillable = [
        'id_chat',
        'content_chat',
        'tgl_chat',
        'foto',
        'id_petugas',
        'nik',
        'id_pengaduan',
    ];



    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan', 'id_pengaduan');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id_petugas');
    }

    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'nik');
    }
}
