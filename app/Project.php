<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];
    //Agregacion masiva
    //protected $guardet[]; si usamos esto estamos desprotegido
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    //Esta funcion es para cambiar la url(es decir antes de mandarnos la id, no mande una
    // url que queremos)
    // public function getRouteKey()
    // {
    //     return 'title'
    // }
}
