<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Database\Eloquent\Model;



class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama',
        'nik',
        'telp',
        'username',
        'password',
    ];

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }

    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
}
