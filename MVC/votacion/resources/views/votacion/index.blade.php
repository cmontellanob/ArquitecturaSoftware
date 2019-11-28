@extends('layouts.app')
@section('contenido')
<h3>Resultados</h3>  
<table>
  <tr>
    <th>MEsa</th>
    <th>Votacion</th>
    <th>p1</th>
    <th>p2</th>
    <th>p3</th>
    <th>p4</th>
    <th>estado</th>
    <th>Operacion</th>  
  </tr>   
  @foreach ($votaciones as $votacion)
  <tr>
    <td>{{$votacion->mesa}}</td>
    <td>{{$votacion->eleccion}}</td>
    <td>{{$votacion->p1}}</td>
    <td>{{$votacion->p2}}</td>
    <td>{{$votacion->p3}}</td>
    <td>{{$votacion->p4}}</td>
    <td>{{$votacion->estado}}</td>
    <td><form method="POST" action="{{route('votacion.destroy',$votacion->id)}}">
      {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="eliminar"> 
    </form></td>
    @endforeach

  </table>  
  @endsection
