<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>