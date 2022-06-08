<?php

namespace App\Http\Livewire;

use App\Models\Sesion;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowSesion extends Component
{
    
    use WithPagination;
    use WithFileUploads;

    public $search="";
    public $search2="";
    public $isOpen=false;
    public Team $team;
    public Sesion $sesion;
    public $escudo;

    protected $listeners=['renderizarSesions'=>'render'];
    protected $rules=[
        'sesion.nombre'=>'',
        'sesion.fecha'=>['required', 'date'],
        'sesion.team_id'=>['required']
    ];

    public function mount(){
        $this->sesion=new Sesion;
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $teams=Team::orderby('nombre')->where('user_id', auth()->user()->id)->get();
        $sesions = Sesion::orderBy('fecha')
            ->where('user_id', auth()->user()->id)
            ->where('nombre', 'like', "%" . $this->search . "%")
            ->where('fecha', 'like', "%" . $this->search2 . "%")->paginate(8);
            return view('livewire.show-sesion', compact('sesions','teams'));
    }

    

    public function borrar(Sesion $sesion){
        
        $sesion->delete();
        $this->emit('borrar', 'Sesion Borrada');

    }
    public function editar(Sesion $sesion){
        $this->sesion=$sesion;
        $this->isOpen=true;

    }
    public function update(){
        $this->validate([
            'sesion.nombre'=>['required', 'string', 'min:3', 'unique:sesions,nombre,'.$this->sesion->id]
        ]);

        $this->sesion->save();
        $this->emit('info', "Sesion Editada");
        $this->reset(['isOpen']);

    }
}

