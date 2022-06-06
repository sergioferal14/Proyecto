<?php

namespace App\Http\Livewire;

use App\Models\Sesion;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateSesion extends Component
{
    use WithFileUploads;
    
    public $nombre,$fecha,$team_id;
    public Team $team;
    public $isOpen=false;
    protected $rules=[
        'nombre'=>['required', 'string', 'max:10', 'unique:sesions,nombre'],
        'fecha'=>['required', 'date'],
        'team_id'=>['required']
    ];

    public function render()
    {
        $teams=Team::orderby('nombre')->where('user_id', auth()->user()->id)->get();

        return view('livewire.create-sesion',compact('teams'));
    }
    public function guardar(){
        $this->validate();
        
        Sesion::create([
            'nombre'=>ucwords($this->nombre),
            'fecha'=>$this->fecha,
            'team_id'=>$this->team_id,
            'user_id'=>auth()->user()->id
        ]);
        $this->reset(['isOpen', 'nombre','fecha']);
        
        $this->emitTo('show-sesion', 'renderizarSesions');

        $this->emit('alerta', 'Sesion Creada con éxito');

    }
    
}

