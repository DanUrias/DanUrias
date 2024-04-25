<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_habitaciones extends Model
{
    use HasFactory;



    //Tabla que va a interpretar 
    private $table ="tipo_habitaciones";//nombre exacto de la tabla
    
    //Campos requeridos, para agregar y actualizar. Todos los campos excepto los de llave primaria.
    public $fillable = [
            'serviciosid',
            'tipo',
            'precio',
            'no_personas'
    ];
    
    //Campos ocultos
    private $hidden = [
        'id' //contraseñas
    ];
    }
    
    
