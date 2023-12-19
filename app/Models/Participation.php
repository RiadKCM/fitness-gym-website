<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;


    protected $table = 'participation';


    protected $fillable = [
        'data_participation',
        'id_user',
        'id_cours'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function cours()
    {
        return $this->belongsTo(Cours::class, 'id_cours');
    }
}
