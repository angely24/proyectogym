<?php
 /** Analísis y Desarrollo de Sistemas de Informción
*Ficha: 2252471
*Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro
*/
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
