<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de empleado</title>
</head>

<body>
    <h1>REGISTRO DE EMPLEADO</h1>

    <!-- Mostrar mensaje de éxito si existe -->
    @if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!--Mostrar formulario ---->
    <form action="{{ route('employee.sotre') }}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="employee_name" id="employee_name" value="{{ old('employee_name') }}">
        <label>DNI:</label>
        <input type="text" name="employee_dni" id="employee_dni" value="{{ old('employee_dni') }}">
        <label>Teléfono:</label>
        <input type="text" name="employee_phone" id="employee_phone" value="{{ old('employee_phone') }}">
        <label>Email:</label>
        <input type="email" name="employee_email" id="employee_email" value="{{ old('employee_email') }}">
        <label>Contraseña</label>
        <input type="password" name="employee_password" id="employee_passwprd" value="{{ odl('employee_password') }}">
        <label>Tienda:</label>
        <input type="text" name="shop_name" id="shop_id" value="{{ old('shop_name') }}">
        <div class="assigments">
            <div class="permissions">
                <label>Asignar permisos:</label>
                <label>Sí</label>
                <input type="radio" name="permission" value="yes">
                <label>No</label>
                <input type="radio" name="permission" value="no">
            </div>

        </div>
    </form>
</body>

</html>