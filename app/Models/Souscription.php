<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscription extends Model
{
    use HasFactory;

    protected $table = 'souscription';

    protected $fillable = [
        'id_user',
        'id_abonnement'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class, 'id_abonnement');
    }
}
