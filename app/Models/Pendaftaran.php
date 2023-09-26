<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table    = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $guarded  = ['id'];
}
