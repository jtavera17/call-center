@extends('theme.base')

@section('content')
    <div class="container pt-5 text-center">
        <h1 class="">
            Crear Seguimiento
        </h1>

        <form action="{{ route('seguimiento.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" name="nombres" class="form-control" placeholder="Escriba nombres completos">  
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Escriba apellidos completos">  
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" name="asunto" class="form-control" placeholder="Escriba el asunto">  
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="mail" name="correo" class="form-control" placeholder="Escriba el correo">  
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Escriba el telefono">  
            </div>

            <div class="mb-3">
                <label for="fecha_seg_actual" class="form-label">Fecha Seguimiento Actual</label>
                <input type="date" name="fecha_seg_actual" class="form-control" placeholder="Escriba el nombre">  
            </div>

            <div class="mb-3">
                <label for="num_dias" class="form-label">Numero de Dias</label>
                <input type="number" name="num_dias" class="form-control" placeholder="Escriba el numero de dias">  
            </div>

            <div class="mb-3">
                <label for="prox_fech_seg" class="form-label">Proxima Fecha de Seguimiento</label>
                <input type="date" name="prox_fech_seg" class="form-control" placeholder="Escriba el nombre">  
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
@endsection