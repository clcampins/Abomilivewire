<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    //definimos unas variables
    public $productos, $nombre, $descripcion_larga, $descripcion_corta, $precio_normal, $precio_con_descuento, $tipo_producto, $marca, $cantidad,  $id_producto;
    public $modal = false;

    protected $rules = [
        'nombre' => 'required',
        'descripcion_larga' => 'required|max:255',
        'descripcion_corta' => 'required|max:50',
        'precio_normal' => 'required',
        'tipo_producto' => 'required',
        'marca' => 'required',
        'cantidad' => 'required'
    ];
    
    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }
    public function cerrarModal() {
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->nombre = '';
        $this->descripcion_larga = '';
        $this->descripcion_corta = '';
        $this->precio_normal = '';
        $this->precio_con_descuento = '';
        $this->tipo_producto = '';
        $this->marca = '';
        $this->cantidad = '';
        $this->id_producto = '';
    }
    public function editar($id)
    {
        $producto = Producto::findOrFail($id);
        $this->id_producto = $id;
        $this->nombre = $producto->nombre;
        $this->descripcion_larga = $producto->descripcion_larga;
        $this->descripcion_corta = $producto->descripcion_corta;
        $this->precio_normal = $producto->precio_normal;
        $this->precio_con_descuento = $producto->precio_con_descuento;
        $this->tipo_producto = $producto->tipo_producto;
        $this->marca = $producto->marca;
        $this->cantidad = $producto->cantidad;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Producto::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        $this->validate();

        Producto::updateOrCreate(['id'=>$this->id_producto],
            [
                'nombre' => $this->nombre,
                'descripcion_larga' => $this->descripcion_larga,
                'descripcion_corta' => $this->descripcion_corta,
                'precio_normal' => $this->precio_normal,
                'precio_con_descuento' => $this->precio_con_descuento,
                'tipo_producto' => $this->tipo_producto,
                'marca' => $this->marca,
                'cantidad' => $this->cantidad
            ]);
         
         session()->flash('message',
            $this->id_producto ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
