<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    protected $table = "receptions";
    
    protected $fillable = [
       'client_id', 'technical_id', 'fecharecepcion', 'problema', 'equipo', 'observacion', 'estado'
    ];

   
    public function client()
    {
        return $this->belongsTo('App\Client');
    } 

    public function technical()
    {
        return $this->belongsTo('App\Technical');
    }   
}
