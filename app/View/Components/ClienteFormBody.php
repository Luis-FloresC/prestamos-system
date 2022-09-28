<?php

namespace App\View\Components;

use App\Models\Clientes;
use Illuminate\View\Component;
use Carbon\Carbon;
class ClienteFormBody extends Component
{
    private $cliente;
    /**
     * Create a new component instance.
     * @param \App\Models\Cliente $cliente
     * @return void
     */
    public function __construct($cliente = null)
    {
        $DateAndTime = date('d-m-Y', time());
        if($cliente == null){
            $cliente = Clientes::make([
                'fechaNacimiento'=> Carbon::now()
            ]);
        }
        $this->cliente = $cliente;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $DateAndTime = date('d-m-Y', time());
        $params=[
            'cliente'=>$this->cliente,
            'fecha'=>$DateAndTime
        ];
      //  dd($params);



        return view('components.cliente-form-body',$params);

    }
}
