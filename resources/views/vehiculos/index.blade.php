<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vehículos</title>
</head>
<body>
    <h1>Vehículos Registrados</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('vehiculos.create') }}">+ Nuevo Vehículo</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Placa</th><th>Marca</th><th>Modelo</th>
                <th>Año</th><th>Color</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->anio }}</td>
                    <td>{{ $vehiculo->color }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}"
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('¿Eliminar este vehículo?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6">No hay vehículos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>