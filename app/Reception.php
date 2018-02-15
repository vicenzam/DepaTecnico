<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    protected $table = "receptions";
    
    protected $fillable = [
      'technical_id', 'nombre_cliente', 'telefono', 'fecharecepcion', 'problema', 'equipo', 'observacion', 'estado', 'solucion'
    ];

    protected $dates = [
        'fecharecepcion'
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
