@extends('layouts.plantilla')

@section('title', 'Crear Producto')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <form class="form-group" method="POST" action="/productos">
        @csrf
        <div class="container">
            <div class="form-group">
                    <h3 style="text-align:center">CREAR NUEVO PRODUCTO</h3>
                <label for="">Nombre Del Producto</label>
                <input type="text" name="nproducto" class="form-control"required>
                <label for=""> Cantidad</label>
                <input type="number"step="any" \min="0" name="caproducto" class="form-control" required>
                <label for=""> Costo por Unidad</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="coproducto" class="form-control" required>
                <label for=""> Precio Venta por Unidad</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="pproducto" class="form-control" required>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </form>
@endsection
