<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'warga';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'status',
        'goldar',
        'pekerjaan',
        'created_by',
        'updated_by'
    ];
}
