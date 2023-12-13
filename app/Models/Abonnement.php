<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $table = 'abonnements';
    protected $fillable = [
        'id',
        'type_abonnement',
        'prix',
        'Description',
        'duree_validite'
    ];

    use HasFactory;
}
