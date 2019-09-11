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
                <h1></h1>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nproducto" class="form-control"required>
                <label for=""> CANTIDAD</label>
                <input type="number"step="any" \min="0" name="caproducto" class="form-control" required>
                <label for=""> COSTO</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="coproducto" class="form-control" required>
                <label for=""> PRECIO</label>
                <input type="text" pattern="^[0-9]+([.][0-9]+)?$" min="0" name="pproducto" class="form-control" required>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </form>
@endsection
