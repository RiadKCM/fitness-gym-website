<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{

    protected $table = 'sports';
    protected $fillable = [
        'nom_sport',
        'description'
    ];

    use HasFactory;
}
