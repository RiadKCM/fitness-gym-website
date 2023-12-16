<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $table = 'coachs';
    protected $fillable = [
        'nom',
        'prenom',
        'id_sport',
        'photo_path',
    ];

    public function sport()
    {
        return $this->belongsTo(Sports::class, 'id_sport');
    }
}
