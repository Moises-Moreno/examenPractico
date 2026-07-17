<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
</head>
<body>
    <h1>Registrar Vehículo</h1>
    <a href="{{ route('vehiculos.index') }}">← Volver</a>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <p>
            <label>Placa:</label>
            <input type="text" name="placa" value="{{ old('placa') }}">
            @error('placa') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') }}">
            @error('marca') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}">
            @error('modelo') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Año:</label>
            <input type="number" name="anio" value="{{ old('anio') }}">
            @error('anio') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Color:</label>
            <input type="text" name="color" value="{{ old('color') }}">
        </p>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>