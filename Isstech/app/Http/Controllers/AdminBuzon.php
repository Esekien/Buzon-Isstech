<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use PDF;
use App\Mail\EnvioCorreo;
use Illuminate\Support\Facades\Mail;

class AdminBuzon extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $quejas_y_sugerencias = App\Queja__sugerencia__felicitacion::all()->sortByDesc('id_Queja_Sugerencia_Felicitacion');

        return view('Buzon',compact('quejas_y_sugerencias'));
    }
    public function visualizar($id){

        
        $revisado = App\Queja__sugerencia__felicitacion::find($id);
        $revisado->estatus = False; 
        $revisado->save();


        $findQueja = App\Queja__sugerencia__felicitacion::with('direccionSend')->with('nodhSend')->with('dhSend')
        ->where('id_Queja_Sugerencia_Felicitacion',$id)
        ->first();

        return view('BuzonMsg',compact('findQueja'));

    }

    public function derechohabiente(){

        $dh = App\Queja__sugerencia__felicitacion::whereNotNull('id_clips_fk')->get()->sortByDesc('id_Queja_Sugerencia_Felicitacion'); 
        return view('tablas.dh',compact('dh'));
        
    }
    public function noDerechohabiente(){

        $ndh = App\Queja__sugerencia__felicitacion::whereNotNull('id_nodhabientes_fk')->get()->sortByDesc('id_Queja_Sugerencia_Felicitacion');
        return view('tablas.ndh',compact('ndh'));
        
    }
    public function anonimo(){

        $anonimos = App\Queja__sugerencia__felicitacion::where('anonimo', 1)->get()->sortByDesc('id_Queja_Sugerencia_Felicitacion');
        return view('tablas.an',compact('anonimos'));
        
    }


    /*GENERA EL PDF*/
    public function pdf($id){
        $findQueja = App\Queja__sugerencia__felicitacion::with('direccionSend')->with('nodhSend')->with('dhSend')
        ->where('id_Queja_Sugerencia_Felicitacion',$id)
        ->first();

        $pdf = PDF::loadView('pdf',compact('findQueja') );
        return $pdf->download('pdf.pdf');
        //return view('pdf',compact('id'));
    }
    public function grafica(){

        $countDH = App\Queja__sugerencia__felicitacion::where('id_clips_fk','!=',NULL)->count();
        $countNOD =  App\Queja__sugerencia__felicitacion::where('id_nodhabientes_fk','!=',NULL)->count(); 
        $countANO =  App\Queja__sugerencia__felicitacion::where('anonimo',1)->count();
        $array = [];
        $array[] = $countDH;
        $array[] = $countNOD;
        $array[] = $countANO;

        return view('grafica',compact('array'));
    }



    //ENVIAMOS EL CORREO ELECTRONICO
    public function msgCorreo(Request $request){

        $request->validate([
            'correoE' => 'required',
            'mensaje' => 'required'
        ]);
        $data = array( 
            'correoE' => $request->input('correoE'),
            'mensaje' => $request->input('mensaje') 
        );

        
        
        
        Mail::to($data['correoE'])->send(new EnvioCorreo($data));

        
        return back()->with('mensaje2', 'Enviado con Exito');
        //->with('success', 'Enviado exitosamente!');
        
    }

}
