<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Producto;

class Home extends Component
{
    public $productos;

    public function mount(){
        $this->productos = Producto::where('cantidad', '>=', 1)->get();
        //dd(json_encode($this->productos));
    }

    public function render()
    {
        return view('livewire.home.home');
    }
}
