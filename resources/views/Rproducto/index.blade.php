@extends('layouts.plantilla')

@section('title', 'Lista de productos')

@section('content')
 @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif
    @if(session('status_edit'))
    <div class="alert alert-success" role="alert">
        {{session('status_edit')}}
    </div>
    @endif
    <h1></h1>
    <h3 style="text-align:center">LISTA DE PRODUCTOS</h3>
    <table class="table table-stripped">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th> # </th>
                    <th scope="col">Producto</th>
                    <th scope="col" >Existencia</th>
                    <th scope="col">Costo Unitario</th>
                    <th scope="col">Precio Venta Unidad</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <?php
            $cont=1;
            ?>
            <tbody class="text-center">
                    @foreach($productos as $producto)
                <tr>
                    <td> <?php print $cont; ?></td>
                    <td>{{$producto->nombreproducto}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>Q {{$producto->costo}}</td>
                    <td>Q {{$producto->precio_venta}}</td>
                    <td>
                        <div class="btn-group">
                            <div class="btn btn-success"><a href="/productos/{{$producto->id}}/edit" style="color: white;">Editar</a>  </div>      
                            <a class="btn btn-primary" href="/productos/{{$producto->id}}/retirar">Retirar</a>
                            <form id="frm" method="POST" action="/productos/{{$producto->id}}">
                                {{@method_field('DELETE')}}
                                @csrf
                                <button type="button" class="btn btn-danger btn-delete">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php $cont+=1; ?>
                @endforeach
            </tbody>
        </table>
@endsection
@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e){
            if(confirm('Esta seguro de borrar el producto?')){
    $(this).parents('form:first').submit();
}
        });
    </script>
@endsection


