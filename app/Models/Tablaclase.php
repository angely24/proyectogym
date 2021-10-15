<?php
 /** Analísis y Desarrollo de Sistemas de Informción
*Ficha: 2252471
*Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablaclase extends Model
{
    use HasFactory;
    protected $table='tablaclases';
    protected $fillable=[
        'hora','clase'
    ];
 
    public $timestamp = false;
}
