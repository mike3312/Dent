@extends('layouts.plantilla')

@section('title', 'Eliminar Producto')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <form class="form-group" method="DELETE" action="productos.destroy">
        @csrf
        <div class="container">
            <div class="form-group">
                <h1></h1>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nproducto" class="form-control"required>
                <button type="submit" class="btn btn-danger">eliminar</button>
            </div>
        </div>
    </form>
@endsection
