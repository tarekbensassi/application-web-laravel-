<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectationex extends Model
{
    protected $table = 'affectationexes';
    protected $fillable = [ 'id', '	idcandidat', 'idexamen', 'etat' ];

    public function reponse()
    {
          return $this->belongsTo(Reponse::class);
    }
}
