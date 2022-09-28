<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes;
use Livewire\WithPagination;
class ClienteIndex extends Component
{

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $busqueda = '';
    public $paginacion = 5;

    protected $queryString =[
        'busqueda' => ['except' => '','as'=>'b'],
        'paginacion' => ['except' => 10,'as'=>'p']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $clientes = $this->allClientes();

        $params = [
            "cliente" => $clientes->paginate($this->paginacion)
        ];
        return view('livewire.cliente-index', $params);
    }

    private function allClientes()
    {
        $cliente = Clientes::orderByDesc('id');
        if ($this->busqueda !== '') {
            $keyWord = '%' . $this->busqueda . '%';
            $cliente->orWhere('nombre', 'LIKE', $keyWord)
                ->orWhere('apellido', 'LIKE', $keyWord)
                ->orWhere('dni', 'LIKE', $keyWord)
                ->orWhere('telefono', 'LIKE', $keyWord)
                ->orWhere('lugarTrabajo', 'LIKE', $keyWord);

        }


        return $cliente;
    }
}
