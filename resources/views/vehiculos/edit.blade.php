<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vehículo</title>
</head>
<body>
    <h1>Editar Vehículo</h1>
    <a href="{{ route('vehiculos.index') }}">← Volver</a>

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Placa:</label>
            <input type="text" name="placa" value="{{ old('placa', $vehiculo->placa) }}">
            @error('placa') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Marca:</label>
            <input type="text" name="marca" value="{{ old('marca', $vehiculo->marca) }}">
            @error('marca') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo', $vehiculo->modelo) }}">
            @error('modelo') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Año:</label>
            <input type="number" name="anio" value="{{ old('anio', $vehiculo->anio) }}">
            @error('anio') <span style="color:red">{{ $message }}</span> @enderror
        </p>
        <p>
            <label>Color:</label>
            <input type="text" name="color" value="{{ old('color', $vehiculo->color) }}">
        </p>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>