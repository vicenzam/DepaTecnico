<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    protected $table = "tecnicals";
    
    protected $fillable = [
        'nombre'
    ];

   
    public function receptions()
    {
        return $this->hasMany('App\Reception');
    }   
}
