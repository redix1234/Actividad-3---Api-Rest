<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre', 'precio', 'cantidad', 'id_categoria'];

    public function getProductosConCategorias()
    {
        return $this->select('productos.id_producto, productos.nombre, productos.precio, productos.cantidad, categorias.nombre AS categoria')
                    ->join('categorias', 'productos.id_categoria = categorias.id_categoria')
                    ->findAll();
    }

    public function getProductosPorCategoria($id_categoria)
    {
        return $this->where('id_categoria', $id_categoria)->findAll();
    }


    public function getCantidadTotalPorCategoria()
    {
        return $this->select('categorias.nombre AS categoria, SUM(productos.cantidad) AS total_cantidad')
                    ->join('categorias', 'productos.id_categoria = categorias.id_categoria')
                    ->groupBy('categorias.nombre')
                    ->findAll();
    }

    public function getProductosPorPrecioMayorA($precio)
    {
        return $this->select('id_producto, nombre, precio, cantidad, id_categoria')
                    ->where('precio >', $precio)
                    ->findAll();
    }

}
