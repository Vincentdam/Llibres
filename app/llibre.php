<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\autor;
use App\editorial;

class llibre extends Model
{
    protected $fillable = [
        'nom',
        'autor_id',
        'editorial_id',
        'preu'
    ];

    public function autor()
    {
        return $this->belongsTo(autor::class);
    }

    public function editorial()
    {
        return $this->belongsTo(editorial::class);
    }

    public function autors_llibres()
    {
        return $this->belongsToMany(autor::class,'autors_llibres','id','id');
    }

    public function editorials_llibres()
    {
        return $this->belongsToMany(editorial::class,'editorials_llibres','id','id');
    }
}
