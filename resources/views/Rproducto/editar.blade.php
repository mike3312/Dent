@extends('layouts.plantilla')

@section('title', 'Editar Producto')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <form class="form-group" method="POST" action="/productos/{{$producto->id}}">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="form-group">
                <h1></h1>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nombreproducto" value="{{$producto->nombreproducto}}" class="form-control"required>
                <label for=""> CANTIDAD</label>
                <input type="number"step="any" min="0" name="cantidad" value="{{$producto->cantidad}}"class="form-control" required>
                <label for=""> COSTO</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="costo" value="{{$producto->costo}}"class="form-control" required>
                <label for=""> PRECIO</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="precio_venta" value="{{$producto->precio_venta}}"class="form-control" required>
                <button type="submit" class="btn btn-primary">EDITAR</button>
            </div>
        </div>
    </form>
@endsection
