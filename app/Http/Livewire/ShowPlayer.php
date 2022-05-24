<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowPlayer extends Component
{
    
    use WithPagination;
    use WithFileUploads;

    public $search="";
    public $campo='id', $orden='desc';
    public $isOpen=true;
    public $team;
    public Player $player;
    public $foto;

    protected $listeners=['renderizarPlayers'=>'render'];
    protected $rules=[
        'player.nombre'=>['required', 'string', 'min:3'],
        'player.apellidos'=>['required', 'string', 'min:3'],
        'player.posicion'=>['required'],
        'player.dorsal'=>['required', 'integer', 'min:1', 'max:99'],
        'player.edad'=>['required', 'integer', 'min:17', 'max:50'],
        'player.altura'=>['required', 'integer', 'min:100', 'max:220'],
        'player.peso'=>['required', 'integer', 'min:1', 'max:100'],
        'player.observaciones'=>['required', 'string', 'min:5'],
        'foto'=>['nullable', 'image', 'max:1024']
    ];

    public function mount($team_id){
        $this->team=Team::find($team_id);
        $this->player=new Player;
    }

    public function render(Team $team)
    {
        //
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        $players = Player::orderBy('dorsal')->where('team_id',$team->id)
            ->where('nombre', 'like', "%" . $this->search . "%")
            ->where('dorsal', 'like', "%" . $this->search . "%")
            ->paginate(5);
            return view('livewire.show-player', compact('players','posiciones'));
        
    }

    public function ordenarPor($campo){
        if($campo==$this->campo){
            $this->orden = ($this->orden=='desc') ? 'asc' : 'desc';
        }
        else
            $this->campo=$campo;
    }

    public function borrar(Player $player){
        //1.- Borro el archivo de imagen
        if(basename($player->foto)!='avatar.png'){
            Storage::delete($player->foto);   
           }
        
        //Borro el player
        $player->delete();
        $this->emit('borrar', 'Jugador Borrado');

    }
    public function edit(Player $player){
        $this->player=$player;
        $this->isOpen=true;

    }
    public function update(){

        if($this->foto){

            if(basename($this->player->foto)!='avatar.png'){
                Storage::delete($this->player->foto);   
               }
            $imagenNueva = $this->foto->store('players');
            $this->player->foto = $imagenNueva;
        }
        $this->player->save();
        $this->emit('info', "Jugador Editado.");
        $this->reset(['isOpen', 'foto']);

    }

    
}
