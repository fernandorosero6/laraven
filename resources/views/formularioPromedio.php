<h1>Formulario promedio</h1>

<form action="{{ route('promedio.store') }}" method="POST" enctype="multipart/form-data">



<label>
    Ingrese la nota 1:
    <br>
    <input type="number" name="num1">
</label>
<br>
<label>
    Ingrese el numero 2:
    <br>
    <input type="number" name="num2">
</label>
<br><br><br>

<label>
    Ingrese la nota 3:
    <br>
    <input type="number" name="num3">
</label>
<br><br><br>
<button type="submit">Enviar Formulario:</button>
</form>
