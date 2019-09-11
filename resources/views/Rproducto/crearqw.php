<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-group" method="POST" action="/productos">
        {{@csrf}}
        <div class="container">
            <div class="form-group">
                <h1></h1>
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nproducto" class="form-control"required>
                <label for=""> CANTIDAD</label>
                <input type="number" name="caproducto" class="form-control"required>
                <label for=""> COSTO</label>
                <input type="number" name="coproducto" class="form-control" step="any" required>
                <label for=""> PRECIO</label>
                <input type="mon" step="any" name="pproducto" class="form-control" >
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </form>
</body>
</html>