<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Producto
        </h2>
    </x-slot>

    <div style="max-width:900px; margin:2rem auto; padding:0 1rem;">

    @if ($errors->any())
        <div class="alerta" style="background:#fee2e2; color:#991b1b;">
            <ul style="margin:0; padding-left:1.2rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nombre</label><br>
            <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}">
        </p>

        <p>
            <label>Precio</label><br>
            <input type="number" step="0.01" name="precio" value="{{ old('precio', $producto->precio) }}">
        </p>

        <p>
            <label>Stock</label><br>
            <input type="number" name="stock" value="{{ old('stock', $producto->stock) }}">
        </p>

        <p>
            <label>Descripción (opcional)</label><br>
            <textarea name="descripcion">{{ old('descripcion', $producto->descripcion) }}</textarea>
        </p>

        <button type="submit" class="btn">Actualizar</button>
        <a href="{{ route('productos.index') }}">Cancelar</a>
    </form>
</div>
</x-app-layout>