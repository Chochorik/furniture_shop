<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class specialOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale',
    ];

    protected function products(): BelongsTo
    {
        return $this->belongsTo(products::class);
    }
}
