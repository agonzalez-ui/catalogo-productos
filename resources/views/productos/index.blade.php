<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Catálogo de Productos
        </h2>
    </x-slot>

    <div style="max-width:900px; margin:2rem auto; padding:0 1rem;">

<p><a href="{{ route('productos.create') }}" class="btn">+ Nuevo producto</a></p>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>₡{{ number_format($producto->precio, 2) }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a href="{{ route('productos.show', $producto) }}">Ver</a> |
                <a href="{{ route('productos.edit', $producto) }}">Editar</a>

                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;"
                    onsubmit="return confirm('¿Seguro que querés borrar este producto?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-rojo" style="padding:0.25rem 0.6rem;">Borrar</button>
                </form>

            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No hay productos todavía.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
</x-app-layout>