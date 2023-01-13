<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['idmhs', 'nim_mhs', 'nama', 'alamat', 'gender', 'idprodi', 'iduser'];
    protected $primaryKey = 'idmhs';
    public $timestamps = false;
}
