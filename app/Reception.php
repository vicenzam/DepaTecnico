<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
    protected $table = "receptions";
    
    protected $fillable = [
      'technical_id', 'nombre_cliente', 'telefono', 'fecharecepcion', 'problema', 'equipo', 'observacion', 'estado'
    ];

    protected $dates = [
        'fecharecepcion'
    ];
   
    public function technical()
    {
        return $this->belongsTo('App\Technical');
    }   
}
