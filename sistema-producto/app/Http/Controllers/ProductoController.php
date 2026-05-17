<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function insertar()
    {
        DB::insert(
            'INSERT INTO productos (nombre, precio, stock) VALUES (?, ?, ?)',
            ['Laptop', 850.00, 10]
        );

        return "Producto insertado correctamente";
    }

    public function mostrar()
{
    $productos = DB::select('SELECT * FROM productos');

    echo "<h1>Lista de Productos</h1>";

    foreach ($productos as $producto) {

        echo "ID: " . $producto->id . "<br>";

        echo "Nombre: " . $producto->nombre . "<br>";

        echo "Precio: $" . $producto->precio . "<br>";

        echo "Stock: " . $producto->stock . "<br>";

        echo "<hr>";
    }
}

    public function actualizar()
    {
        DB::update(
            'UPDATE productos SET precio = ? WHERE id = ?',
            [900.00, 1]
        );

        return "Producto actualizado correctamente";
    }

    public function eliminar()
    {
        DB::delete(
            'DELETE FROM productos WHERE id = ?',
            [1]
        );

        return "Producto eliminado correctamente";
    }
}