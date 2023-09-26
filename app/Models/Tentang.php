<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tentang extends Model
{
    use HasFactory;
    protected $table    = 'tentang';
    protected $primaryKey = 'id';
    protected $guarded  = ['id'];
}
