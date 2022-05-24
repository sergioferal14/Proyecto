<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Team $team)
    {
        
        $search="";
        $control=true;
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        $players = Player::orderBy('dorsal')->where('team_id',$team->id)
            ->where('nombre', 'like', "%" . $search . "%")
            ->orwhere('dorsal', 'like', "%" . $search . "%")
            ->paginate(6);
            return view('livewire.show-player', compact('players','request','posiciones','control','search','team'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        return view('livewire.show-player',compact('posiciones','foto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$foto=($this->foto) ? $this->foto->store('players') : 'players/avatar.png';
        if ($request->file('foto')) {
            $url =($request->file('foto')) ? Storage::put('public/players', $request->file('foto')) : Storage::put('public/players/avatar.png');
            $urlBuena = "players/" . basename($url);
        }
        
        $request->validate([
            'nombre'=>['required', 'string', 'min:3'],
            'apellidos'=>['required', 'string', 'min:3'],
            'posicion'=>['required'],
            'dorsal'=>['required', 'integer', 'min:1', 'max:99'],
            'edad'=>['required', 'integer', 'min:17', 'max:50'],
            'altura'=>['required', 'integer', 'min:100', 'max:220'],
            'peso'=>['required', 'integer', 'min:1', 'max:100'],
            'observaciones'=>['required', 'string', 'min:5'],
            'foto'=>['nullable', 'image', 'max:1024'],
            
        ]);
        dd($request);
        $player = Player::create($request->all());
        $player->update([
            'foto' => $urlBuena,
            
        ]);
        
        
        return redirect()->route('livewire.show-player')->with('alerta', 'Jugador Creado con éxito');
    }

    public function show(Player $player)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $Player
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $Player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $control=false;
        return view('livewire.show-player', compact('post','control'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $Player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $request->validate([
            'nombre'=>['required', 'string', 'min:3'],
            'apellidos'=>['required', 'string', 'min:3'],
            'posicion'=>['required'],
            'dorsal'=>['required', 'integer', 'min:1', 'max:99'],
            'edad'=>['required', 'integer', 'min:17', 'max:50'],
            'altura'=>['required', 'integer', 'min:100', 'max:220'],
            'peso'=>['required', 'integer', 'min:1', 'max:100'],
            'observaciones'=>['required', 'string', 'min:5'],
            'foto'=>['nullable', 'image', 'max:1024']
        ]);

        if ($request->file('foto')) {

            if(basename($player->foto)!='avatar.png'){
                Storage::delete("public/players" . $player->foto);  
               }
            
            //se ha subido la imagen la almaceno físicamente
            $url = Storage::put('public/players', $request->file('foto'));
            // $url=public/posts/nombre.jpg
            //"posts/".basename($url) =>nombre.jpg
            $urlBuena = "players/" . basename($url);
            $player->update($request->all());
            $player->update(['foto' => $urlBuena]);
        } else {
            //no queremos cambiar la imagen
            $player->update($request->all());
        }
        //Ahora asociamos a este post sus etuiquetas
        $control=true;
        return redirect()->route('livewire.show-player',compact('control'))->with('info', "Jugador Editado.");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $Player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        if(basename($player->foto)!='avatar.png'){
            Storage::delete($player->foto);   
           }
        //2.- Borro el post
        $player->delete();
        //3.-nos vamos a index
        return redirect()->route('livewire.show-player')->with('borrar', 'Jugador Borrado');
    }
}
