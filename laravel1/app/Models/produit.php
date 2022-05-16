<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'image',
        'description',
        'stock',
        'categorie',
        'prix',
    ];
    public function utilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class);
    }
}
