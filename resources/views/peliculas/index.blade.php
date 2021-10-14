@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Peliculas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('peliculas.create') }}" title="Create pelicula"> <i class="fas fa-plus-circle"></i> AGREGAR PELICULA
                    </a>
            </div>
        </div>
    </div>

    

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Año</th>
            <th>Director</th>
            <th>Descripcion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($peliculas as $pelicula)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pelicula->nombre }}</td>
                <td>{{ $pelicula->anio }}</td>
                <td>{{ $pelicula->director }}</td>
                <td>{{ $pelicula->descripcion }}</td>
                <td>
                    <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST">

                        <a href="{{ route('peliculas.show', $pelicula->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('peliculas.edit', $pelicula->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash-alt fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $peliculas->links() !!}

@endsection