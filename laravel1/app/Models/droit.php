<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class droit extends Model
{
    use HasFactory;

    protected $fillable = [
        'editer',
        'supprimer',
        'ajouter',
        'acheter',
        'lire',
    ];
    public function groupes()
    {
        return $this->hasToMany(Groupe::class);
    }
}
