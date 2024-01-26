<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;



class News extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    public function categorynews(): BelongsTo
    {
        return 	$this->belongsTo(Categorynews::class, 'id_kategori', 'id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
