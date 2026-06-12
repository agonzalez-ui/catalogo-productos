<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Lista todos los productos
    public function index()
    {
        $productos = Producto::latest()->get(); // los más recientes primero
        return view('productos.index', compact('productos'));
    }

    // Muestra el formulario para crear
    public function create()
    {
        return view('productos.create');
    }

    // Guarda el producto nuevo
    public function store(Request $request)
    {
        // Validamos antes de guardar
        $datos = $request->validate([
            'nombre'      => 'required|string|max:255',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'descripcion' => 'nullable|string',
        ]);

        Producto::create($datos);

        return redirect()->route('productos.index')
                         ->with('exito', 'Producto creado correctamente.');
    }

    // Muestra un producto
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    // Muestra el formulario para editar
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // Guarda los cambios
    public function update(Request $request, Producto $producto)
    {
        $datos = $request->validate([
            'nombre'      => 'required|string|max:255',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'descripcion' => 'nullable|string',
        ]);

        $producto->update($datos);

        return redirect()->route('productos.index')
                         ->with('exito', 'Producto actualizado correctamente.');
    }

    // Borra un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('exito', 'Producto eliminado correctamente.');
    }
}