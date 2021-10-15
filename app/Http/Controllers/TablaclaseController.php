<?php
 /** Analísis y Desarrollo de Sistemas de Informción
*Ficha: 2252471
*Aprendiz: Angely Rojas, Andres Sanchez y Valentina Montenegro
*/
namespace App\Http\Controllers;

use App\Models\Tablaclase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TablaclaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $Tablaclase=Tablaclase::all();
        return view('home')->with('Tablaclase', $Tablaclase);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos =request()->validate([
            'hora'=>['required'],
            'clase'=>['required'],
        ]);
        Tablaclase::create ([
            'hora'=>$datos['hora'],
            'clase'=> $datos['clase'],
        ]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tablaclase  $tablaclase
     * @return \Illuminate\Http\Response
     */
    public function show(Tablaclase $tablaclase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tablaclase  $tablaclase
     * @return \Illuminate\Http\Response
     */
    public function edit(Tablaclase $tablaclase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tablaclase  $tablaclase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tablaclase $tablaclase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tablaclase  $tablaclase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tablaclases')->whereId($id)->delete();
        return redirect('home');
    }
}
