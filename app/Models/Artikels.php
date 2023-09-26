<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikels extends Model
{
    use HasFactory;
    protected $table    = 'artikels';
    protected $primaryKey = 'id';
    // protected $guarded  = ['id'];
    protected $fillable = [
        'judul', 'deskripsi', 'tanggal'
    ];

}
