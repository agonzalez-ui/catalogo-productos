<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo Producto
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto px-4">

            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 text-red-800 px-4 py-3">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="rounded-lg bg-white shadow p-6">
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-1 font-medium text-gray-700">Nombre</label>
                        <input type="text" name="nombre" value="{{ old('nombre') }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium text-gray-700">Precio</label>
                        <input type="number" step="0.01" name="precio" value="{{ old('precio') }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium text-gray-700">Stock</label>
                        <input type="number" name="stock" value="{{ old('stock', 0) }}"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-medium text-gray-700">Descripción (opcional)</label>
                        <textarea name="descripcion" rows="4"
                                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="submit"
                                class="rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                            Guardar
                        </button>
                        <a href="{{ route('productos.index') }}"
                           class="text-blue-600 hover:underline">Cancelar</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>