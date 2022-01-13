<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\preaprobado;
use Illuminate\Http\Request;
use League\CommonMark\Block\Element\Document;

class PreaprobadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['sfiformularios']=preaprobado::paginate(10);
        return view('sfiformulario.index',$datos);
    }

    public function pdf($id)
    {
        $estudiopdf=preaprobado::findOrfail($id);
    if ($estudiopdf['Estado']=='Aprobado'){


      
        $pdf = PDF::loadView('sfiformulario.pdf', compact('estudiopdf') );
        
        return $pdf->download('Certidicado_de_estudio.pdf');
        
    }   
    else{
        $estudiopdf=preaprobado::findOrfail($id);
        return view('sfiformulario.noaprobado', compact('estudiopdf') );
       
    }
     
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('sfiformulario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $datosformulario = request()->except('_token');
      
    
      if  (($resultadon=(($datosformulario['ing_men_principal'] + $datosformulario['otros_ingresos'])-$datosformulario['gastos_mensual'])/2.5) > $datosformulario['Presupues_mens']){
        
        $datosformulario['Estado']='Aprobado';
        $datosformulario['resultado']= $resultadon;
        $mensaje='Estudio Aprobado';       
        $estudiopdf = preaprobado::insert($datosformulario); 
       // $estudiopdf = preaprobado::latest('id')->first();
             
      //$pdf = PDF::loadView('sfiformulario.pdf', compact('estudiopdf'));    
      // return $pdf->stream('Certidicado_de_estudio.pdf');
      return redirect('sfiformulario');


      }
    else {
            $datosformulario['Estado']='Negado';            
            $mensaje='Estudio Negado';
            $estudiopdf=preaprobado::insert($datosformulario);
            $estudiopdf = preaprobado::latest('id')->first();
       
           
    }

      
      return view('sfiformulario.noaprobado', compact('estudiopdf'));

     // return response()->json($datosformulario);
    // return redirect('sfiformulario')->with('mensaje',$mensaje);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\preaprobado  $preaprobado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\preaprobado  $preaprobado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudio=preaprobado::findOrfail($id);

        return view('sfiformulario.edit', compact('estudio') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preaprobado  $preaprobado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosformulario = request()->except(['_token','_method']);
        preaprobado::where('id','=',$id)->update($datosformulario);
        $estudio=preaprobado::findOrfail($id);
        //return view('sfiformulario.edit', compact('estudio') );
        return redirect('sfiformulario');

     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preaprobado  $preaprobado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudio=preaprobado::findOrfail($id);
        Preaprobado::destroy($id);
        return redirect('sfiformulario')->with('mensaje','Estudio Borrado');
    }
}
