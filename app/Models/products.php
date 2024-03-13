<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'main_image',
        'schema',
        'additionally',
        'rating',
        'characteristics',
        'schema_additional',
        'model',
        'schema_title',
        'schema_description',
    ];

    protected $casts = [
        'characteristics' => 'array',
    ];
}
