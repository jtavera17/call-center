@extends('theme.base')

@section('content')
    <div class="container pt-5 text-center">
        <h1 class="">
            Seguimiento de Clientes
        </h1>
        <a href="{{ route('seguimiento.create', ['id'=>1]) }}" class="btn btn-primary">
            Crear
        </a>

        <table class="table">
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Asunto</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Seguimiento Actual</th>
                <th>Dias</th>
                <th>Proximo Seguimiento</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>787</td>
                    <td>Editar - Eliminar</td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection