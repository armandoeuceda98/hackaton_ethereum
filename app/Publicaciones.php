<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    protected $connection = 'mysql';
    
    //definimos el nombre de la tabla
    protected $table="publicaciones";

    //definimos el primaryKey
    protected $primaryKey="PkPublicacion";
}
