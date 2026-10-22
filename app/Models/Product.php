<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_id',
        'name',
        'slug',
        'category',
        'subtitle',
        'tag',
        'image',
        'what_it_is',
        'how_we_printed_it',
        'callout_text',
        'specs',
    ];

    protected $casts = [
        'specs' => 'array',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}