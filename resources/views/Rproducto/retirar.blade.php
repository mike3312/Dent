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
                <h3 style="text-align:center">RETIRAR PRODUCTO</h3>
        </div>
        <h5>Retirar de: {{$producto->nombreproducto}}</h5>
        <h5>Existencia actual: {{$producto->cantidad}}</h5>
        <div class="form-group">
                <label for=""> La cantidad de:</label>
                <input type="number"step="any" min="0" name="cantidad" value="5"class="form-control" required>

                <H1></H1>
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </div>
        </div>

    </form>


@endsection
