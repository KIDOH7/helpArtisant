<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'artisan_id',
        'nom',
        'description',
        'prix',
        'images',
        'videos',
    ];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
