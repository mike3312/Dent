@extends('layouts.plantilla')

@section('title', 'Lista de productos')

@section('content')
    @if(session('status'))
        <div class="alert alert-danger" role="alert">
            {{session('status')}}
        </div>
@endif
    <table class="table table-hover">
            <thead>
                <tr>
                    <th>  </th>
                    <th>Producto</th>
                    <th>Existencia</th>
                    <th>Costo</th>
                    <th>Precio Venta</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombreproducto}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>Q{{$producto->costo}}</td>
                    <td>Q{{$producto->precio_venta}}</td>
                    <td>
                            <form class="form-group" method="POST" action="/productos/{{$producto->id}}">
                                {{@method_field('DELETE')}}
                                @csrf
                                <button type="submit" class="btn btn-success">Editar</button>
                            </form>
                    </td>
                    <td>
                        <form class="form-group" method="POST" action="/productos/{{$producto->id}}">
                            {{@method_field('DELETE')}}
                            @csrf
                            <button type="submit" class="btn btn-danger btn-delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
@section('scripts')
    <script>
        $('.btn-danger').on('click', function(e)){
if(confirm('Esta seguro de borrar el producto?')){
    $(this).parents('form:first').submit();
}
        };
    </script>
@endsection
