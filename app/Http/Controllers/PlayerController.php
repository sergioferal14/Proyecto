<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
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

        $foto="";
        
        $control=true;
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        
            $players = Player::orderBy('dorsal')->where('team_id',$team->id)
            ->nombre($request->nombre)
            ->paginate(6);
        
            return view('players.index', compact('players','request','foto','posiciones','control','team'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        return view('players.index',compact('posiciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre'=>['required', 'string', 'min:3'],
            'apellidos'=>['required', 'string', 'min:3'],
            'posicion'=>['required'],
            'dorsal'=>['required', 'integer', 'min:1', 'max:99'],
            'edad'=>['required', 'integer','min:1','max:50'],
            'altura'=>['required', 'integer', 'min:100', 'max:220'],
            'peso'=>['required', 'integer', 'min:1', 'max:100'],
            'observaciones'=>['nullable', 'string', 'min:5'],
            'foto'=>['nullable', 'image'],
            
        ]);
        $player = Player::create($request->all());
        if($request->file('foto')){
            
            $file = $request->file("foto");

            $urlBuena = "players/".time()."_".$file->getClientOriginalName();

            Storage::disk("public")->put($urlBuena, \File::get($file));
            $player->update([
                'foto'=>$urlBuena
             ]);
        }
           
        
        return redirect()->route('players.index',$player->team_id)->with('crear', 'Jugador Creado con éxito');
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

   

    public function edit(Request $request,Team $team,Player $player)
    {

        $foto="";
        $control=false;
        $posiciones=['Delantero','Centrocampista','Defensa','Portero'];
        $players = Player::orderBy('dorsal')->where('team_id',$team->id)
            ->nombre($request->nombre)
            ->paginate(7);
        
            return view('players.index', compact('players','request','foto','posiciones','control','team','player'));
        
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
        
        if($request->btnAccion==1){
    $request->validate([
                'nombre'=>['required', 'string', 'min:3'],
                'apellidos'=>['required', 'string', 'min:3'],
                'posicion'=>['required'],
                'dorsal'=>['required', 'integer', 'min:1', 'max:99'],
                'edad'=>['required', 'integer', 'min:1', 'max:50'],
                'altura'=>['required', 'integer', 'min:100', 'max:220'],
                'peso'=>['required', 'integer', 'min:1', 'max:100'],
                'observaciones'=>['nullable', 'string', 'min:2'],
                'foto'=>['nullable', 'image'],
                'btnAccion'=>['nullable']
            ]);

                if($request->file('foto')){

                        if($player->foto!='players/avatar.png'){
                            Storage::delete($player->foto);
                        }                          
        
                    $file = $request->file("foto");
                            $urlBuena = "players/".time()."_".$file->getClientOriginalName();
        
                            Storage::disk("public")->put($urlBuena, \File::get($file));
                            $player->update($request->all());

                            $player->update([
                                'foto'=>$urlBuena
                            ]);
                }else {
                
                $player->update($request->all());
            }
            
            
            return redirect()->route('players.index',$player->team_id)->with('crear', "Jugador Editado con exito.");
        }else{
            if(basename($player->foto)!='avatar.png'){
                Storage::delete($player->foto);   
               }
            $id_team=$player->team_id;
            $player->delete();
            
            return redirect()->route('players.index',$id_team)->with('borrar', 'Jugador Borrado');
        }

    }

    // public function export(Team $team){
        
    //     $jugadores=Player::where('team_id',$team->id)
    //     ->select('id','nombre', 'apellidos','posicion','dorsal','edad','peso','altura','observaciones','created_at','updated_at')
    //     ->get();
    //     return Excel::download(new ProductsExport($jugadores),'jugadores.xlsx');
    // }
    
}
