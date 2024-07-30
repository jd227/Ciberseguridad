<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    
    public $table ="programas"; //Nombre de la base de datos 
    protected $fillable = ['id', 'nombre','apellido', 'duracion' ];
    public $timestamps = true;
}
