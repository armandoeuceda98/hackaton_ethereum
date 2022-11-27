<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $connection = 'mysql';
    
    //definimos el nombre de la tabla
    protected $table="publicacionesusuario";

    //definimos el primaryKey
    protected $primaryKey="id";
}
