@extends('layouts.plantilla')

@section('title', 'Crear Producto')

@section('content')
    <form class="form-group" method="POST" action="/productos">
        @csrf
        <div class="container">
            <div class="form-group">
                <h1></h1>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nproducto" class="form-control">
                <label for="">CANTIDAD</label>
                <input type="text" name="Caproducto" class="form-control">
                <label for="">COSTO</label>
                <input type="text" name="Coproducto" class="form-control">
                <label for="">PRECIO VENTA</label>
                <input type="text" name="pproducto" class="form-control">
          
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </form>
@endsection
