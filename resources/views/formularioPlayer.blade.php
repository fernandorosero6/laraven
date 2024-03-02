<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        
<h1>Formulario player</h1>
<form action="{{route('player.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        Escribe cual es tu juego favorito:
        <br>
        <input type="text" name="game">
    </label>
    <br>
    <label>
        Ingresa tu nombre de usuario 
        <br>
        <input type="text" name="name">
    </label>
    <br><br><br>
   
    <button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>