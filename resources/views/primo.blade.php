<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>primo</title>
</head>
<body>
    <h1>Ingrese un número y descubra si es primo</h1>

    @if (session('resultado'))
        <p>{{ session('resultado') }}</p>
    @endif

    <form action="{{ route('primo.store') }}" method="POST">
        @csrf
        <label>
            Ingrese un número:
            <br>
            <input type="number" name="numero1">
        </label>
        <br><br>
        <button type="submit">Enviar Formulario</button>
        <br><br>
        <a href="{{ route('nav.create') }}" class="btn btn-primary">Volver</a>

        {{-- <button type="button" class="btn btn-primary" onclick="window.history.go(-1)">atras</button> --}}

    </form>
</body>
</html>
