<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo producto
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

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <p>
            <label>Nombre</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </p>

        <p>
            <label>Precio</label><br>
            <input type="number" step="0.01" name="precio" value="{{ old('precio') }}">
        </p>

        <p>
            <label>Stock</label><br>
            <input type="number" name="stock" value="{{ old('stock', 0) }}">
        </p>

        <p>
            <label>Descripción (opcional)</label><br>
            <textarea name="descripcion">{{ old('descripcion') }}</textarea>
        </p>

        <button type="submit" class="btn">Guardar</button>
        <a href="{{ route('productos.index') }}">Cancelar</a>
    </form>
</div>
</x-app-layout>