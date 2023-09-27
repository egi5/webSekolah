<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikels extends Model
{
    use HasFactory,Sluggable;
    
    protected $table    = 'artikels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'slug', 'deskripsi', 'thumbnail', 'tanggal'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

}
