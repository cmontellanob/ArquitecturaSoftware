@extends('layouts.app')
@section('contenido')
   <form class="form " method="POST" action="{{route('votacion.store')}}">
    {{ csrf_field() }}
      <label for="mesa" >Mesa</label>
      <input id="mesa" type="text" name="mesa"  required autofocus ><br>
      <label for="eleccion" >Eleccion</label>
      <input id="eleccion" type="text" name="eleccion"  required autofocus ><br>
      <label for="p1" >P1</label>
      <input id="p1" type="text" name="p1"  required autofocus ><br>
      <label for="p2" >P2</label>
      <input id="p2" type="text" name="p2"  required autofocus ><br>
      <label for="p3" >P3</label>
      <input id="p3" type="text" name="p3"  required autofocus ><br>
      <label for="p4" >P4</label>
      <input id="p4" type="text" name="p4"  required autofocus ><br>
      <button type="submit" >Registrar</button>
    </form>
@endsection

