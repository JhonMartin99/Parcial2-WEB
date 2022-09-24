<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\cliente;

class ClienteComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $id_cliente,$dpi,$nombre,$apellido,$email,$tel,$direccion,$valor;
    public $view = 'create';

    public function render()
    {
        return view('livewire.cliente-component',[
            'clientes' => Cliente::when($this->valor, function($query, $valor){
                return $query->where('dpi','LIKE',"%$valor%")
                             ->orwhere('nombre','LIKE',"%$valor%")
                             ->orwhere('apellido','LIKE',"%$valor%")
                             ->orwhere('email','LIKE',"%$valor%");
            })->paginate(10)
        ]);
    }

    public function store()
    {
        $this->validate(['dpi'=>'required', 'nombre'=>'required', 'apellido'=>'required', 'email' => 'required']);

        $cliente = cliente::create([
            'dpi' => $this->dpi,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'tel' => $this->tel,
            'direccion' => $this->direccion
        ]);

        $this->edit($cliente->id_cliente);
    }

    public function edit($id)
    {
        $cliente = cliente::find($id);

        $this->id_cliente = $cliente->id_cliente;
        $this->dpi = $cliente->dpi;
        $this->nombre = $cliente->nombre;
        $this->apellido = $cliente->apellido;
        $this->email = $cliente->email;
        $this->tel = $cliente->tel;
        $this->direccion = $cliente->direccion;

        $this->view = "edit";
    }

    public function update()
    {
        $this->validate(['dpi'=>'required', 'nombre'=>'required', 'apellido'=>'required', 'email' => 'required']);
        $cliente = cliente::find($this->id_cliente);

        $cliente -> update([
            'dpi' => $this->dpi,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'tel' => $this->tel,
            'direccion' => $this->direccion
        ]);

        $this->default();
    }

    public function default()
    {
        $this->id_cliente = '';
        $this->dpi = '';
        $this->nombre = '';
        $this->apellido = '';
        $this->email = '';
        $this->tel = '';
        $this->direccion = '';

        $this->view = "create";
    }

    public function destroy($id){
        Cliente::destroy($id);
    }
}
