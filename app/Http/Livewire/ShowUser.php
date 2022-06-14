<?php

namespace App\Http\Livewire;

use App\Models\user;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Showuser extends Component
{
    
    use WithPagination;
    

    public $campo='id', $orden='desc';
    public $search="";
    public user $user;
    public $foto;

    protected $listeners=['renderizarUser'=>'render'];

    public function mount(){
        $this->user=new user;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::orderBy($this->campo, $this->orden)
            ->where('name', 'like', "%" . $this->search . "%")
            ->orWhere('email', 'like', "%" . $this->search . "%")
            ->paginate(6);
            return view('livewire.show-user', compact('users'));
    }

    public function ordenarPor($campo){
        if($campo==$this->campo){
            $this->orden = ($this->orden=='desc') ? 'asc' : 'desc';
        }
        else
            $this->campo=$campo;
    }

    public function borrar(user $user){
        //1.- Borro el archivo de imagen
        if($user->profile_photo_path){
            Storage::delete($user->profile_photo_path);   
        }
        
        //Borro el user
        $user->delete();
        $this->emit('borrar', 'Usuario Borrado');

    }

    public function cambiarEstado(user $user){
        $this->user=$user;
        $this->user->email_verified_at= now();
        $this->user->save();
        
    }
    
    
}
