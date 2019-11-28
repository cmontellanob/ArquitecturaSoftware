@extends('layouts.app')
@section('contenido')
   <form class="form " method="POST" action="{{route('votacion.update',$votacion->id)}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="patch">
      <label for="mesa" >Mesa</label>
      <input id="mesa" type="text" name="mesa"  required autofocus value="{{ $votacion->mesa }}" ><br>
      <label for="eleccion" >Eleccion</label>
      <input id="eleccion" type="text" name="eleccion"  required autofocus value="{{ $votacion->eleccion }}" ><br>
      <label for="p1" >P1</label>
      <input id="p1" type="text" name="p1"  required autofocus value="{{ $votacion->p1 }}"><br>
      <label for="p2" >P2</label>
      <input id="p2" type="text" name="p2"  required autofocus value="{{ $votacion->p2 }}" ><br>
      <label for="p3" >P3</label>
      <input id="p3" type="text" name="p3"  required autofocus value="{{ $votacion->p3 }}" ><br>
      <label for="p4" >P4</label>
      <input id="p4" type="text" name="p4"  required autofocus value="{{ $votacion->p4 }}" ><br>
      <label for="estado" >estado</label>
      <input id="estado" type="text" name="estado"  required autofocus value="{{ $votacion->estado }}" ><br>

      <button type="submit" >Actualizar</button>
    </form>
@endsection
