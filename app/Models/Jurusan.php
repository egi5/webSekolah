<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use HasFactory;
    protected $table    = 'jurusan';
    protected $primaryKey = 'id';
    protected $guarded  = ['id'];
}
