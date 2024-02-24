<h1> Verificar si son números amigos</h1>

<form action="{{ route('amigo.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Ingrese número 1
        <br>
        <input type="number" name="num1">
    </label>
    <br>
    <label>
        Ingrese número 2:
        <br>
        <input type="number" name="num2">
    </label>
    <br><br><br>

    <button type="submit">Enviar Formulario</button>
</form>
