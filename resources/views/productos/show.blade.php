<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>

    <div class="py-8">
            <div class="max-w-3xl mx-auto px-4">
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <th class="bg-gray-800 px-4 py-3 text-white w-40">Precio</th>
                                <td class="px-4 py-3">₡{{ number_format($producto->precio, 2) }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-800 px-4 py-3 text-white">Stock</th>
                                <td class="px-4 py-3">{{ $producto->stock }} unidades</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-800 px-4 py-3 text-white">Descripción</th>
                                <td class="px-4 py-3">{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                            </tr>
                            <tr>
                                <th class="bg-gray-800 px-4 py-3 text-white">Creado</th>
                                <td class="px-4 py-3">{{ $producto->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 flex items-center gap-3">
                    <a href="{{ route('productos.edit', $producto) }}"
                       class="rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Editar</a>
                    <a href="{{ route('productos.index') }}"
                       class="text-blue-600 hover:underline">Volver al catálogo</a>
                </div>
            </div>
        </div>
</div>
</x-app-layout>