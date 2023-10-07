<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Model;



class Petugas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_petugas';
    public $incrementing = false;


    protected $fillable = [
        'id_petugas',
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];


    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class);
    }
    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
}
