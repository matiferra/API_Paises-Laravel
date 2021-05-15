@extends('layouts.plantillaAdmin')

@section('title', 'ABM Usuario')</title>

@section('flechaVolver')
    <div>
        <a href="{{ route('paises.index') }}" class="btn btn-success mb-5"> Panel Paises </span></a>
    </div>
@endsection

@section('cuerpo')

    <p class="text-center text-9x1 mb-4"><b><u>Alta, Baja y Modificaciones <br> de Usuario</u></b></p>
    <table class="table table-bordered striped">
        <thead>
            <tr class='text-white' style="background-color: dodgerblue;">
                <td><b>Nombre</b></td>
                <td><b>Email</b></td>
                <td><b>Token</b></td>
                <td><b>Acciones</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                <td><b>{{ $usuario->name }}</b></td>
                <td><b>{{ $usuario->email }}</b></td>
                <td><b>{{ $usuario->api_token }}</b></td>
                    <td>
                        <a class='btn btn-lg bg-primary'style='width:60 px; height:40px' href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-primary"><span class="fa fa-edit"> </span></a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="mt-1 btn btn-lg bg-danger " style='width:60 px; height:40px' type="submit"><span class="fa fa-trash"></button>
                        </form>    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}
    <a href="{{ route('usuarios.create') }}" class="btn btn-success"><span class="fa fa-plus"> Agregar Usuario </span></a>

@endsection
