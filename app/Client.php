<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";
    
    protected $fillable = [
        'nombre', 'cedula', 'telefono', 'email'
    ];

   
    public function receptions()
    {
        return $this->hasMany('App\Reception');
    }   
}
