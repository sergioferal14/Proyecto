<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowTeam extends Component
{
    
    use WithPagination;
    use WithFileUploads;

    public $search="";
    public $isOpen=false;
    public Team $team;
    public $escudo;

    protected $listeners=['renderizarTeams'=>'render'];
    protected $rules=[
        'team.nombre'=>'',
        'escudo'=>['nullable', 'image', 'max:1024']
    ];

    public function mount(){
        $this->team=new Team;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $teams = Team::orderBy('nombre')->where('user_id', auth()->user()->id)
            ->where('nombre', 'like', "%" . $this->search . "%")->paginate(3);
            return view('livewire.show-team', compact('teams'));
    }

    public function borrar(Team $team){
        //1.- Borro el archivo de imagen
        if(basename($team->escudo)!='avatar-shield.png'){
            Storage::delete($team->escudo);   
           }
        
        //Borro el team
        $team->delete();
        $this->emit('borrar', 'Equipo Borrado');

    }
    public function edit(Team $team){
        $this->team=$team;
        $this->isOpen=true;

    }
    public function update(){
        $this->validate([
            'team.nombre'=>['required', 'string', 'min:3', 'unique:teams,nombre,'.$this->team->id]
        ]);

        if($this->escudo){

            if(basename($this->team->escudo)!='avatar-shield.png'){
                Storage::delete($this->team->escudo);   
               }
            $imagenNueva = $this->escudo->store('escudos');
            $this->team->escudo = $imagenNueva;
        }
        $this->team->save();
        $this->emit('info', "Equipo Editado.");
        $this->reset(['isOpen', 'escudo']);

    }
}
