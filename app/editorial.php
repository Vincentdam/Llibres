<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\autor;
use App\llibre;

class editorial extends Model
{
   protected $filable = ['nom'];

   public function autor()
   {
       return $this->belongsTo(autor::class);
   }

   public function llibre()
   {
       return $this->belongsTo(llibre::class);
   }

   public function editorials_llibres()
   {
       return $this->belongsToMany(llibre::class, 'editorials_llibres', 'id', 'id');
   }

   public function editorials_autors()
   {
       return $this->belongsToMany(autors::class,'editorials_autors','id' ,'id');
   }
    
}
