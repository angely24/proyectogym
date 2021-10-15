<?php
 /** Analísis y Desarrollo de Sistemas de Informción
*Ficha: 2252471
*Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
