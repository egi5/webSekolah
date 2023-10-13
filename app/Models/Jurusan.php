<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Jurusan extends Model
{
    use HasFactory, Sluggable;
    protected $table    = 'jurusan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_jurusan', 'slug', 'thumbnail', 'deskripsi'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_jurusan'
            ]
        ];
    }
}
