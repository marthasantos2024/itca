<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    
    protected $table = 'marcas'; // Nombre de la tabla
    protected $primaryKey = 'codigo'; // Llave primaria de la tabla
    protected $fillable = ['nombre']; // Campos para asignación masiva

}
