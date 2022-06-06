<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Sesion;
use App\Models\TiposEjercicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Sesion $sesion)
    {
        $usuario=auth()->user();
        $tipos=TiposEjercicio::orderBy('nombre')->get();
        $ejerciciosPublicos=Ejercicio::orderBy('created_at')->where('estado',2);
        $ejercicios=Ejercicio::orderBy('created_at')->where('sesion_id',$sesion->id)->paginate(3);
        $ejerciciosCont=Ejercicio::orderBy('created_at')->get()->groupBy('tipo_id');

        return view('ejercicios.index',compact('tipos','ejercicios','ejerciciosCont','ejerciciosPublicos','sesion','usuario'));
    }

    public function index1(Request $request,TiposEjercicio $tipo)
    {
        $controlador=false;
        $tipos=TiposEjercicio::orderBy('nombre')->get();
        $ejerciciosPublicos=Ejercicio::orderBy('created_at')->where('estado',2);    
        $ejercicios=Ejercicio::orderBy('created_at')->where('tipo_id',$tipo->id)->busqueda($request->busqueda)->paginate(3);  
        $ejerciciosCont=Ejercicio::orderBy('created_at')->get()->groupBy('tipo_id');
        
        return view('ejercicios.index',compact('tipos','ejercicios','ejerciciosCont','ejerciciosPublicos','tipo','request'));
    }

    public function index2(Request $request)
    {
        
        $tipos=TiposEjercicio::orderBy('nombre')->get();
        $ejerciciosPublicos=Ejercicio::orderBy('created_at')->where('estado',2);
        $ejercicios=Ejercicio::orderBy('created_at')->where('estado',2)
        ->tipoId($request->tipo_id)->paginate(3);
        $ejerciciosCont=Ejercicio::orderBy('created_at')->get()->groupBy('tipo_id');
        

        return view('ejercicios.index',compact('tipos','ejercicios','ejerciciosCont','ejerciciosPublicos','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'img'=>['nullable','image'],
            'descripcion'=>['required', 'string', 'min:5'],
            'njugadores'=>['required', 'integer', 'max:30'],
            'material'=>['required','string','min:3'],
            'tiempo'=>['required','string'],
            'user_id'=>['required','integer'],
            'tipo_id'=>['required']
        ]);

        dd($request);
        
        if($request->estado== "on" ){
            $request->estado=2;
            
        }else{
            $request->estado=1;
        }

            $ejercicio=Ejercicio::create($request->all());

        if($request->file('img')){
            $file=$request->file('img');
            $urlBuena="ejercicios/".time()."_".$file->getClientOriginalName();

            Storage::disk("public")->put($urlBuena,\File::get($file));
            $ejercicio->update([
                'img'=>$urlBuena
            ]);
        }
        if($request->sesion_id){
            return redirect()->route('ejercicio.index',$request->sesion_id)->with('crear', 'Ejercicio creado con éxito');
        }else{
            return redirect()->route('ejercicio.index1',$request->tipo_id)->with('crear', 'Ejercicio creado con éxito');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function quitar(Ejercicio $ejercicio)
    {

        $idSesion=$ejercicio->sesion_id;

        $ejercicio->update([
            'sesion_id'=>null
        ]);

        return redirect()->route('ejercicio.index',$idSesion)->with('borrar', "Ejercicio quitado.");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Ejercicio $ejercicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejercicio $ejercicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ejercicio  $ejercicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejercicio $ejercicio)
    {
        
        if(basename($ejercicio->img)!='noimage.jpg'){
            Storage::delete($ejercicio->img);   
           }

        $id_tipo=$ejercicio->tipo_id;
        $ejercicio->delete();
        
        return redirect()->route('ejercicio.index1',$id_tipo)->with('borrar', 'Ejercicio Borrado');
    }
}
