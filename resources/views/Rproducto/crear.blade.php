@extends('layouts.plantilla')

@section('title', 'Crear Producto')

@section('content')
    <form class="form-group" method="POST" action="/productos">
        @csrf
        <div class="container">
            <div class="form-group">
                <h1></h1>
                <label for="">Nombre del Producto</label>
                <input type="text" name="nproducto" class="form-control">
                <button type="submit" class="btn btn-primary">Guardar Producto</button>
            </div>
        </div>
    </form>
@endsection
