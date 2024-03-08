<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<h1>Calcula formula cuadratica</h1>


<form action="{{ route('cuadratica.store') }}" method="POST">
    @csrf
    <label>
        Ingrese el numero para la variable a:
        <br>
        <input type="number" name="a">
    </label>
    <br>
    <label>
        Ingrese el numero para la variable b:
        <br>
        <input type="number" name="b">
    </label>
    <br>

    <label>
        Ingrese el numero para la variable c:
        <br>
        <input type="number" name="c">
    </label>
    <br><br><br>
    <button type="submit">Enviar Formulario:</button>
    </label>
    <br><br>

    @if (isset($soluciones) && $soluciones)
    <p>Las soluciones son: x1 = {{ $soluciones[0] }}, x2 = {{ $soluciones[1] }}</p>
@else
    <p>No hay soluciones reales</p>
@endif

<a href="{{ route('nav.create') }}" class="btn btn-primary">Volver</a>

</form>
</body>
</html>
