@extends('layouts.app');

@section('content')
    <div class="container text-center">
    <H1>Crear Contacto</H1>
    

    <form action="{{ url('/contacto/'.$contacto->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <label for="nombre">{{ 'nombre' }}</label>
        <input type="text" name="nombre" id="nombre" value="{{ $contacto->nombre }}">
        <br>

        <input type="submit" value="Guardar" class="btn ">
     </form>
</div>
@endsection