<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;


class ContactoController extends Controller
{
    private $direccionNuevaa ;
    private $quejaNueva ;
    private $clip ;
    private $no_derechohabienteNuevo ;
    public function __construct()
    {
         /*INSTANCIAS*/
        $this->direccionNueva = new App\Direccion;
        $this->quejaNueva = New App\Queja__sugerencia__felicitacion;
        $this->clip = New App\Clip;
        $this->no_derechohabienteNuevo = New App\No_derechohabientes;
        //codigo para tener rutas seguras
        //     $this->middleware('auth');
    }


    public function contacto(){
        
        return view('contacto');

    }
    public function formContacto(){

        return view('formContacto');
    }



    /* ENVIO DE LA QUEJA */
    public function sendFormDH(Request $request){
       
        $request->validate([
            'codigo_postal' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'colonia' => 'required',
            'ciudad_municipio' => 'required',
            'clip' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'tipo' => 'required',
            'nservidor' => 'required',
            'cargo' => 'required',
            'area' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',

        ]);
        /*INSERT A LA TABLA DIRECCION*/
        
        
        $this->direccionNueva->codigo_postal = $request->codigo_postal;
        $this->direccionNueva->calle = $request->calle;
        $this->direccionNueva->numero = $request->numero;
        $this->direccionNueva->colonia = $request->colonia;
        $this->direccionNueva->ciudad_municipio = $request->ciudad_municipio;
        //no se puede agregar de forma masiva por que tiene otros inputs
        //$direccionNueva->create($request->all());
        $this->direccionNueva->save();

        /*OBTENGO EL ULTIMO ID INSERTADO*/
        /*AUN QUE NO SE LLAME ID si no (id_direccion) me lo reconoce como id solamente*/
        $lastId_direccion = $this->direccionNueva->id_direccion;
        
        //IMPORTANTE VALIDAR QUE EL CLIP EXISTA
        $this->quejaNueva->id_clips_fk = $request->clip;

        $this->quejaNueva->anonimo = false;
        $this->quejaNueva->telefono_celular = $request->telefono;
        $this->quejaNueva->correo = $request->correo;
        $this->quejaNueva->id_direccion_fk = $lastId_direccion;
        $this->quejaNueva->tipo = $request->tipo;
        $this->quejaNueva->nombre_del_servidor_publico = $request->nservidor;
        $this->quejaNueva->cargo = $request->cargo;
        $this->quejaNueva->area_de_servicio = $request->area;
        $this->quejaNueva->descripcion = $request->descripcion;
        $this->quejaNueva->fecha_hora = $request->fecha;

        $this->quejaNueva->save();
        

        return back()->with('mensaje', 'Enviado con Exito');;

    }
    public function sendFormNoDH(Request $request){

        $request->validate([
            'codigo_postal' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'colonia' => 'required',
            'ciudad_municipio' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'tipo' => 'required',
            'nservidor' => 'required',
            'cargo' => 'required',
            'area' => 'required',
            'descripcion' => 'required',
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'fecha' => 'required'
        ]);

        $this->no_derechohabienteNuevo->nombre = $request->nombre;
        $this->no_derechohabienteNuevo->apellido_paterno = $request->paterno;
        $this->no_derechohabienteNuevo->apellido_materno = $request->materno;

        $this->no_derechohabienteNuevo->save();


        
        $lastIdNodh = $this->no_derechohabienteNuevo->id;



        $this->direccionNueva->codigo_postal = $request->codigo_postal;
        $this->direccionNueva->calle = $request->calle;
        $this->direccionNueva->numero = $request->numero;
        $this->direccionNueva->colonia = $request->colonia;
        $this->direccionNueva->ciudad_municipio = $request->ciudad_municipio;
        //no se puede agregar de forma masiva por que tiene otros inputs
        //$direccionNueva->create($request->all());
        $this->direccionNueva->save();

        /*OBTENGO EL ULTIMO ID INSERTADO*/
        /*AUN QUE NO SE LLAME ID si no (id_direccion) me lo reconoce como id solamente*/
        $lastId_direccion = $this->direccionNueva->id_direccion;

        $this->quejaNueva->id_nodhabientes_fk = $lastIdNodh;
        $this->quejaNueva->anonimo = false;
        $this->quejaNueva->telefono_celular = $request->telefono;
        $this->quejaNueva->correo = $request->correo;
        $this->quejaNueva->id_direccion_fk = $lastId_direccion;
        $this->quejaNueva->tipo = $request->tipo;
        $this->quejaNueva->nombre_del_servidor_publico = $request->nservidor;
        $this->quejaNueva->cargo = $request->cargo;
        $this->quejaNueva->area_de_servicio = $request->area;
        $this->quejaNueva->descripcion = $request->descripcion;
        $this->quejaNueva->fecha_hora = $request->fecha;

        $this->quejaNueva->save();




        return back()->with('mensaje', 'Enviado con Exito');;
    }
    public function sendFormAN(Request $request){

        $request->validate([
            'tipo' => 'required',
            'nservidor' => 'required',
            'cargo' => 'required',
            'area' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required'
        ]);

        $this->quejaNueva->anonimo = true;
        $this->quejaNueva->tipo = $request->tipo;
        $this->quejaNueva->nombre_del_servidor_publico = $request->nservidor;
        $this->quejaNueva->cargo = $request->cargo;
        $this->quejaNueva->area_de_servicio = $request->area;
        $this->quejaNueva->descripcion = $request->descripcion;
        $this->quejaNueva->fecha_hora = $request->fecha;

        $this->quejaNueva->save();





        return back()->with('mensaje', 'Enviado con Exito');
    }


}
