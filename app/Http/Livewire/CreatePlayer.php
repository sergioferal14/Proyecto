<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePlayer extends Component
{
    use WithFileUploads;
    
    public $foto;
    public $posicion="posicion";
    public $nombre,$apellidos,$dorsal,$edad,$altura,$peso,$observaciones;
    public $isOpen=false;
    protected $rules=[
        'nombre'=>['required', 'string', 'min:3'],
        'apellidos'=>['required', 'string', 'min:3'],
        'posicion'=>['required'],
        'dorsal'=>['required', 'integer', 'min:1', 'max:99'],
        'edad'=>['required', 'integer', 'min:17', 'max:50'],
        'altura'=>['required', 'integer', 'min:100', 'max:220'],
        'peso'=>['required', 'integer', 'min:1', 'max:100'],
        'observaciones'=>['required', 'string', 'min:5'],
        'foto'=>['nullable', 'image', 'max:1024']
    ];

    public function render()
    {
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        return view('livewire.create-player',compact('posiciones'));
    }
    public function guardar(){
        $this->validate();
        $foto=($this->foto) ? $this->foto->store('players') : 'players/avatar.png';
        
        Player::create([
            'nombre'=>ucwords($this->nombre),
            'apellidos'=>ucwords($this->apellidos),
            'posicion'=>$this->posicion,
            'dorsal'=>$this->dorsal,
            'edad'=>$this->edad,
            'altura'=>$this->altura,
            'peso'=>$this->peso,
            'observaciones'=>$this->observaciones,
            'foto'=>$foto,
        ]);

        $this->reset(['isOpen', 'nombre','foto','apellidos','posicion','dorsal','edad','altura','peso','observaciones']);
        
        $this->emitTo('show-player', 'renderizarPlayers');

        $this->emit('alerta', 'Jugador Creado con éxito');

    }
}

