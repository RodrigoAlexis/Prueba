@extends('layouts.app')

@section('content')
<title class="title">Contacto</title> 

<div class="container text-center">
    <H1>Crear Contacto</H1>
    
    <form action="{{ url('/contacto')}}" method="post">
        {{ csrf_field() }}
        <label for="nombre">{{ 'nombre' }}</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <input type="submit" value="Insertar" class="btn ">
     </form>
</div>
@endsection 