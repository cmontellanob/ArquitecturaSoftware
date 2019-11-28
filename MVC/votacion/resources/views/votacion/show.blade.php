@extends('layouts.app')
@section('contenido')
              <h3>Voto Registrado</h3>  

    <div>Mesa: {{$votacion->mesa}} </div>
    <div>Eleccion: {{$votacion->eleccion}} </div>
   <div>P1: {{$votacion->p1}} </div>
   <div>P2: {{$votacion->p2}} </div>
   <div>P3: {{$votacion->p3}} </div>
   <div>P4: {{$votacion->p4}} </div>
   <div>Estado: {{$votacion->estado}} </div>
   
@endsection
