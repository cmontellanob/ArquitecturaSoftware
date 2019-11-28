<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Votacion;

class VotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $votaciones=Votacion::orderBy('mesa', 'asc')->get();
      return view("votacion.index")->withVotaciones($votaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("votacion.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $votacion = new Votacion([
            'mesa' => $request->get('mesa'),
            'eleccion' => $request->get('eleccion'),
            'p1' => $request->get('p1'),
            'p2' => $request->get('p2'),
            'p3' => $request->get('p3'),
            'p4' => $request->get('p4'),
            'estado' => 'V'
        ]);
        $votacion->save();
        
        return view('votacion.show')->withVotacion($votacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $votaciones=Votacion::where('mesa','=', $id)->get();
     $votacion=$votaciones[0];
     return view("votacion.show")->withVotacion($votacion);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $votacion=Votacion::find($id);
        return view("votacion.edit")->withVotacion($votacion);   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $votacion=Votacion::find($id);
        $votacion->mesa=$request->get('mesa');
        $votacion->eleccion=$request->get('eleccion');
        $votacion->p1=$request->get('p1');
        $votacion->p2=$request->get('p2');
        $votacion->p3=$request->get('p3');
        $votacion->p4=$request->get('p4');
        $votacion->estado=$request->get('estado');
        $votacion->save();
        //dd($votacion);
        //var_dump($votacion);
//     return view("votacion.show")->withVotacion($votacion);   
        
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $votacion=Votacion::find($id);
        $votacion->estado='E';
        $votacion->save();
        return view("votacion.show")->withVotacion($votacion);   

    }
}
