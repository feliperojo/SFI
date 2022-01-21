<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulario de Estudio</title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>  
  <link rel="stylesheet" href="/css/app.css">
  <script src="/js/funciones.js"></script>
  
</head>
<body class="container overflow">
    <div class="img-container">
            <img src="/img/listaestudios.png" class="img-fluid">
  </div> 
  <br>
  <div> 
  <div class="btnnuevo">
            <a href="{{ url('sfiformulario/create') }}" class="btn btn-outline" >Crear Nuevo Estudio</a>                        
  </div>  
   
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre completo</th>
            <th scope="col">Rfc</th>
            <th scope="col">Genero</th>
            <th scope="col">Telefono</th>
            <th scope="col">Situacion laboral</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>            
            <th scope="col" to>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sfiformularios as $sfiformulario)

        <tr>
            <td>{{$sfiformulario->id}}</td>
            <td style = "text-transform:capitalize;">{{$sfiformulario->nombre_completo}}</td>
            <td>{{$sfiformulario->rfc}}</td>
            <td>{{$sfiformulario->genero}}</td>
            <td>{{$sfiformulario->celular}}</td>
            <td>{{$sfiformulario->situacion_lab}}</td>
            <td>{{$sfiformulario->created_at->format('Y-m-d')}}</td>
            <td>{{$sfiformulario->Estado}}</td>
            <td>
                 <a href="{{ url('/sfiformulario/'.$sfiformulario->id.'/edit') }}" class="btn btn-outline-warning">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                     <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></a>                
                <td>  
                <form action="{{ url('/sfiformulario/'.$sfiformulario->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                   <input    type="submit" onclick="return confirm('¿Quieres eliminar?')" class="btn btn-outline-danger" value="Eliminar" >                    
                </form>
                <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detalle{{$sfiformulario->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg></button>
                                
                   </td>
                </td>
            </td>
        </tr>

        <div class="modal fade" id="detalle{{$sfiformulario->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
             <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Informacion del Estudio.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
              <!-- Modal inicio-->

          <div class="modal-body">            
                <div class="container overflow-hidden"> 
                    <div class="row">
                    <div class="col">                      
                        <label for="">¿Dónde te gustaría vivir? (Ciudad, colonia o barrio)</label>
                        <input type="text" name="Donde_vivir" value="{{ $sfiformulario->Donde_vivir }}"  class="form-control"  id="" disabled>                      
                     </div>
                        <div class="col">
                        <label for="floatingInput">¿Cuál es tu presupuesto para la renta mensual en $MXN</label>                                
                        <input type="text" name="Presupues_mens" value="{{$sfiformulario->Presupues_mens }}" class="form-control"  disabled>                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="">¿Ya has decidido qué inmueble rentar?</label>
                    <input type="text"  name="Decidido_inm" id="flexRadioDefault1" value="{{$sfiformulario->Decidido_inm }}" class="form-control"  disabled >
                    </div>
                    <div class="col">
                    <label for="floatingInput">Nombre completo</label>
                    <input type="text" id="nombre_completos" name="nombre_completo" value="{{$sfiformulario->nombre_completo}}" class="form-control" disabled >
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Correo electrónico de contacto</label>
                    <input type="text" name="correo"  value="{{$sfiformulario->correo }}" class="form-control" disabled>
                    </div>
                    <div class="col">
                    <label for="floatingInput">Número de celular</label>
                    <input type="text" name="celular" value="{{ $sfiformulario->celular }}" class="form-control" disabled>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Rfc</label>
                    <input type="number" name="rfc" value="{{ $sfiformulario->rfc}}" class="form-control" disabled>
                    </div>
                    <div class="col">
                    <label for="floatingInput">Fecha de nacimiento.</label>
                    <input type="date" name="fecha_nacimiento" value="{{$sfiformulario->fecha_nacimiento}}" class="form-control" disabled>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Genero.</label>
                    <input type="text" name="genero" value="{{$sfiformulario->genero }}" class="form-control" disabled>
                    </div>                   
                    <div class="col">
                    <label for="floatingInput">Estado civil.</label>
                    <input type="text" name="estado_civil" value="{{$sfiformulario->estado_civil}}" class="form-control" disabled>
                    </div> 
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Grado de escolaridad.</label>
                    <input type="text" name="escolaridad" value="{{ $sfiformulario->escolaridad }}" class="form-control" disabled>
                    </div>                 
                    <div class="col">
                    <label for="floatingInput">Situación laboral.</label>
                    <input type="text" name="situacion_lab" value="{{$sfiformulario->situacion_lab}}" class="form-control" disabled>
                    </div> 
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Nombre de la empresa en que trabajas.</label>
                    <input type="text" name="nomb_empre" value="{{$sfiformulario->nomb_empre}}" class="form-control" disabled>
                    </div>                  
                    <div class="col">
                    <label for="floatingInput">Antiguedad en la empresa.</label>
                    <input type="text" name="antiguedad_empre" value="{{ $sfiformulario->antiguedad_empre }}" class="form-control" disabled>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Descripción de tu cargo.</label>
                    <input type="text" name="cargo_empresa" value="{{ $sfiformulario->cargo_empresa}}" class="form-control" disabled>
                    </div>
                    <div class="col">
                    <label for="floatingInput">Fuente de ingresos principal.</label>
                    <input type="text" name="fuente_ingreso" value="{{ $sfiformulario->fuente_ingreso}}" class="form-control" disabled>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Ingresos mensuales actividad económica principal (En $MXN)</label>
                    <input type="number" name="ing_men_principal" value="{{$sfiformulario->ing_men_principal}}" class="form-control" id="ing_men_principal"  disabled>
                     </div>                    
                    <div class="col">
                    <label for="floatingInput">Gastos/egresos mensuales (En $MXN)</label>
                    <input type="number" name="gastos_mensual" value="{{  $sfiformulario->gastos_mensual}}" class="form-control" id="gastos_mensual" disabled>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Observaciones</label>
                    <input type="text" name="observacion" value="{{ $sfiformulario->observacion}}" class="form-control"  disabled>                    
                    </div>
                    <div class="col">
                    <label for="floatingInput">Resultado del Estudio</label>
                    <input type="text" name="estado" value="{{ $sfiformulario->Estado}}" class="form-control"  disabled>                   
                    </div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="floatingInput">Fecha Creacion</label>
                    <input type="text" name="created_at" value="{{ $sfiformulario->created_at->format('Y-m-d')}}" class="form-control"  disabled>                    
                    </div>
                    <div class="col">
                    <label for="floatingInput">Valor resultado</label>
                    <input type="text" name="resultado" value="{{ $sfiformulario->resultado }}" class="form-control"  disabled>                   
                    </div>
                    </div>                    
                 </div>           
          </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <a href="{{ url('/sfiformulario/'.$sfiformulario->id.'/pdf') }}" class="btn btn-outline" onclick="" >Pdf</a>
                               
          </div>
        </div>
      </div>
    </div>

     <!-- Modal fin-->

        @endforeach
    </tbody>
</table>

    <div class="d-flex justify-content-end">
      {{ $sfiformularios->links() }}
    </div>    
</div> 

</body>
   

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif



