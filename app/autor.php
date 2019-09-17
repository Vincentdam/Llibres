<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\llibre;
use App\editorial;

class autor extends Model
{
    protected $fillable = ['nom'];

    public function llibre()
    {
        return $this->hasMany(llibre::class);
    }

    public function editorial()
    {
        return $this->hasMany(editorial::class);
    }

    public function autors_llibres()
    {
        return $this->belongsToMany(llibre::class, 'autors_llibres','id','id');
    }

    public function editorials_autors()
   {
       return $this->belongsToMany(editorials::class,'editorials_autors','id' ,'id');
   }
}
