<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>

    <div style="max-width:900px; margin:2rem auto; padding:0 1rem;">

    <table>
        <tr>
            <th>Precio</th>
            <td>₡{{ number_format($producto->precio, 2) }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $producto->stock }} unidades</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td>
        </tr>
        <tr>
            <th>Creado</th>
            <td>{{ $producto->created_at->format('d/m/Y H:i') }}</td>
        </tr>
    </table>

    <p style="margin-top:1rem;">
        <a href="{{ route('productos.edit', $producto) }}" class="btn">Editar</a>
        <a href="{{ route('productos.index') }}">Volver al catálogo</a>
    </p>
</div>
</x-app-layout>