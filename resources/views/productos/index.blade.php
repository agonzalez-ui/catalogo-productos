<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Catálogo de Productos
        </h2>
    </x-slot>

    <div style="max-width:900px; margin:2rem auto; padding:0 1rem;">

<p><a href="{{ route('productos.create') }}" class="btn">+ Nuevo producto</a></p>

<div class="py-8">
            <div class="max-w-5xl mx-auto px-4">

                @if (session('exito'))
                    <div class="mb-4 rounded-lg bg-green-100 text-green-800 px-4 py-3">
                        {{ session('exito') }}
                    </div>
                @endif

                <div class="mb-4">
                    <a href="{{ route('productos.create') }}"
                       class="inline-block rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                        + Nuevo producto
                    </a>
                </div>

                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <table class="w-full text-left">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-3">Nombre</th>
                                <th class="px-4 py-3">Precio</th>
                                <th class="px-4 py-3">Stock</th>
                                <th class="px-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($productos as $producto)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3">{{ $producto->nombre }}</td>
                                    <td class="px-4 py-3">₡{{ number_format($producto->precio, 2) }}</td>
                                    <td class="px-4 py-3">{{ $producto->stock }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('productos.show', $producto) }}"
                                               class="text-blue-600 hover:underline">Ver</a>
                                            <a href="{{ route('productos.edit', $producto) }}"
                                               class="text-blue-600 hover:underline">Editar</a>
                                            <form action="{{ route('productos.destroy', $producto) }}" method="POST"
                                                  onsubmit="return confirm('¿Seguro que querés borrar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="rounded bg-red-600 px-3 py-1 text-sm text-white hover:bg-red-700">
                                                    Borrar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                                        No hay productos todavía.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</div>
</x-app-layout>