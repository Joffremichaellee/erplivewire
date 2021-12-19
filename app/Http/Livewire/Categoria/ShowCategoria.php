<?php

namespace App\Http\Livewire\Categoria;

use App\Models\Categoria;

use Livewire\Component;

class ShowCategoria extends Component
{

    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public $estado;
    public $open = false;

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $categorias = Categoria::where('nombre','like','%'.$this->search.'%')
                                ->orWhere('descripcion','like','%'.$this->search.'%')
                                ->orderBy($this->sort, $this->direction)->get();
                                

        return view('livewire.categoria.show-categoria', compact('categorias'));
    }


    public function order($orden){

        if ($this->sort = $orden) {
            
            if ($this->direction == 'desc') {
                $this->direction= 'asc';
            }else{
                $this->direction= 'desc';
            }

        }
        

        
    }

    public function activar($id)
    {
//|1        if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 0;
        $categoria->save();
        
    }

    public function desactivar($id)
    {
//|1        if (!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = 1;
        $categoria->save();
        
    }

}
