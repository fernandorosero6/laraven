
<h1>Formulario promedio</h1>

<form action="{{route('promedio.store') }}" method="POST">
    @csrf
    <label>
        Ingrese la nota 1:
        <br>
        <input type="number" name="numero1">
    </label>
    <br>
    <label>
        Ingrese el numero 2:
        <br>
        <input type="number" name="numero2">
    </label>
    <br><br><br>

    <label>
        Ingrese la nota 3:
        <br>
        <input type="number" name="numero3">
    </label>
    <br><br><br>
    <button type="submit">Enviar Formulario:</button>
</form>


