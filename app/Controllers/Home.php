<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Home extends BaseController
{
    public function index()
    {
        $productoModel = new ProductoModel();
        $productosConCategorias = $productoModel->getProductosConCategorias();
        return $this->response->setJSON($productosConCategorias);
    }

    // Nuevo método para obtener productos por categoría
    public function productosPorCategoria($id_categoria)
    {
        $productoModel = new ProductoModel();
        $productos = $productoModel->getProductosPorCategoria($id_categoria);
        return $this->response->setJSON($productos);
    }

     // Nuevo método para obtener la cantidad total de productos por categoría
     public function cantidadTotalPorCategoria()
     {
         $productoModel = new ProductoModel();
         $cantidadTotal = $productoModel->getCantidadTotalPorCategoria();
         return $this->response->setJSON($cantidadTotal);
     }
 
     // Nuevo método para obtener productos con un precio mayor a un valor específico
     public function productosPorPrecioMayorA($precio)
     {
         $productoModel = new ProductoModel();
         $productosPorPrecio = $productoModel->getProductosPorPrecioMayorA($precio);
         return $this->response->setJSON($productosPorPrecio);
     }
}
