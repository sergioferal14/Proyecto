<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTeam extends Component
{
    use WithFileUploads;
    
    public $escudo;
    public $nombre;
    public $isOpen=false;
    protected $rules=[
        'nombre'=>['required', 'string', 'min:3', 'unique:teams,nombre'],
        'escudo'=>['nullable', 'image', 'max:1024']
    ];

    public function render()
    {
        return view('livewire.create-team');
    }
    public function guardar(){
        $this->validate();
        $escudo=($this->escudo) ? $this->escudo->store('escudos') : 'escudos/avatar-shield.png';
        
        Team::create([
            'nombre'=>ucwords($this->nombre),
            'escudo'=>$escudo,
            'user_id'=>auth()->user()->id
        ]);
        $this->reset(['isOpen', 'nombre','escudo']);
        
        $this->emitTo('show-team', 'renderizarTeams');

        $this->emit('alerta', 'Equipo Creado con éxito');

    }
    
}
