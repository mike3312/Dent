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
        <div class="page-header">
                <h3 style="text-align:center">EDITAR PRODUCTO</h3>
              </div>
            <div class="form-group">
                <label for="">Nombre del producto</label>
                <input type="text" name="nombreproducto" value="{{$producto->nombreproducto}}" class="form-control"required>
                <label for=""> Cantidad</label>
                <input type="number"step="any" min="0" name="cantidad" value="{{$producto->cantidad}}"class="form-control" required>
                <label for=""> Costo por Unidad</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="costo" value="{{$producto->costo}}"class="form-control" required>
                <label for=""> Precio Venta Unidad</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="precio_venta" value="{{$producto->precio_venta}}"class="form-control" required>
                <H1></H1>
                <button type="submit" class="btn btn-primary">EDITAR</button>
            </div>
        </div>

    </form>


@endsection
