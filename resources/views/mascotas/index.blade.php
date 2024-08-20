@extends('layouts.app')

@section('content')

  <a href="{{route('mascotas.create')}}">agregar</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Descripcion</th>
                <th>Type</th>
                <th>Day old</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->id}}</td>
                <td>{{ $mascota->name}}</td>
                <td>{{ $mascota->description}}</td>
                <td>{{ $mascota->type}}</td>
                <td>{{ $mascota::getDays( $mascota )}}</td>
                <td>
                    <a href="{{ route('mascotas.edit', $mascota->id) }}">editar</a>
                    <a 
                    href="{{ route('mascotas.destroy', $mascota->id) }}"
                    onclick="
                    event.preventDefault();
                    if (confirm('Esta seguro de eliminar este registro') == true) {
                        document.getElementById('delete-form').submit();
                    }
                   
                    "
                 >Eliminar</a>
                 <form id="delete-form" action="{{  route('mascotas.destroy', $mascota->id)  }}" method="POST">
                     @csrf
                     @method('DELETE')
                 </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection