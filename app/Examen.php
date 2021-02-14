<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examens';
    protected $fillable = ['id', 'nom', 'bareme', 'nbq'  ];

    public function reponse()
    {
        return $this->belongsTo(Reponse::class);
    }
}
