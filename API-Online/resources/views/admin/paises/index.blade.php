@extends('layouts.plantillaAdmin')

@section('title', 'ABM Paises')</title>

@section('flechaVolver')
    <div>
        <a href="{{ route('usuarios.index') }}" class="btn btn-success mb-5"> Panel Usuarios </span></a>
    </div>
@endsection

@section('cuerpo')

    <p class="text-center text-9x1 mb-4"><b><u>Alta, Baja y Modificaciones <br> de Paises</u></b></p>
    <table class="table table-bordered striped">
        <thead>
            <tr class='text-white' style="background-color: dodgerblue;">
                <td><b>Codigo</b></td>
                <td><b>Continente</b></td>
                <td><b>Pais</b></td>
                <td><b>Latitud</b></td>
                <td><b>Longuitud</b></td>
                <td><b>GMT/UTC</b></td>
                <td><b>Acciones</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais)
                <tr>
                <td><b>{{ $pais->id }}</b></td>
                @foreach($continentes as $continente)
                        @if($continente->id == $pais->id_continente)
                            <td>{{ $continente->nombre }}</td>
                        @endif
                @endforeach
                <td><b>{{ $pais->nombre }}</b></td>
                <td><b>{{ $pais->latitud }}</b></td>
                <td><b>{{ $pais->longuitud }}</b></td>
                <td><b>{{ $pais->GMT_UTC }}</b></td>
                    <td>
                        <a class='btn btn-lg bg-primary'style='width:60 px; height:40px' href="{{ route('paises.edit', $pais) }}" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                        <form action="{{ route('paises.destroy', $pais) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="mt-1 btn btn-lg bg-danger " style='width:60 px; height:40px' type="submit"><span class="fa fa-trash"></button>
                        </form>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $paises->links() }}
    <a href="{{ route('paises.create') }}" class="btn btn-success"><span class="fa fa-plus"> Agregar Pais </span></a>

@endsection
