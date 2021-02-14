<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class condidat extends Model
{
    
    protected $table = 'condidats';
    protected $fillable = [ 'id', 'nom', 'prenom', 'email' , 'mdp' ];

    public function reponse()
    {
          return $this->belongsTo(Reponse::class);
    }
}
