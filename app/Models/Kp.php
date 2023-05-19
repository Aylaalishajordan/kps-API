<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kp extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nama',
        'nis',
        'JK',
        'AK',
        'alamat',
        'status',
        'tanggal_lahir',
    ];
    // public $timestamps = false;
}