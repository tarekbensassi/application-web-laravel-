<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    
    protected $table = 'questions';
    protected $fillable = [ 'id', 'enonce', 'bareme', 'rep1' , 'rep2', 'rep3', 
    'repb', 'id_examen' ];

    public function reponse()
    {
          return $this->belongsTo(Reponse::class);
    }
}
