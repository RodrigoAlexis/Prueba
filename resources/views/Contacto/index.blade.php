@extends('layouts.app')

@section('content')
<div class="container">
    <title class="title">Contacto</title>
    <H1 class="tittle">Contacto</H1>
    <a href="contacto/create" class="btn ">Insertar Contacto</a>
                   
<table class="table table-light" table-bordered >
    <thead class="thead-liht">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $contacto as $cont )             
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $cont->nombre }}</td>
            <td> 
                <a href="{{ url('/contacto/'.$cont->id.'/edit') }}" class="btn  ">Editar</a>
                <form method="post" action="{{ url('/contacto/'.$cont->id)}}" >
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn  " type="submit" onclick="return confirm('¿Está seguro que desea eliminar el elemento seleccionado?');">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection 