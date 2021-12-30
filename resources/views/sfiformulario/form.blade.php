
<!DOCTYPE html>
<html lang="en">    
<head>
<title>Preaprobacion de Renta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/css/app.css">  
  <script src="/js/funciones.js"></script>
</head>
<body>
    
<section class="container rounded p-6" >
        <img src="/img/prerent.png" class="img-fluid" >        
</section>
  <div class="container text-white text-center " id="nuevo">
      <hr width=100%    size=5>
        <h1>{{ $modo }} Estudio</h1>
      <hr width=100%    size=5>
      <div class="notacondition">
        <center><p>Completa este corto formulario, obtén tu preaprobación Rent10 y aplica a tantas propiedades en renta como necesites con una sola aplicación. Tiempo estimado para completar: 4 minutos</p></center>
    </div>
  </div>
  <br>
 <br> 
 
 <div class="container overflow-hidden"> 
 <div class="row">
    <div class="col">
    <div class="form-floating mb-3">      
        <input type="text" name="Donde_vivir" value="{{ isset($estudio) ? $estudio->Donde_vivir : '' }}"  class="form-control"  id="" required>
        <label for="floatingInput">¿Dónde te gustaría vivir? (Ciudad, colonia o barrio)</label>
        </div> 
    </div>
    <div class="col">
    <div class="form-floating mb-3">          
    <input type="text" name="Presupues_mens" value="{{ isset($estudio) ? $estudio->Presupues_mens : '' }}" class="form-control"  required>
    <label for="floatingInput">¿Cuál es tu presupuesto para la renta mensual en $MXN (incluidos los gastos de mantenimiento) Ej. $10.000 MXN</label>
    </div>
</div>
  </div>    
    <div class="row">
        <div class="col"> 
            <label for="">¿Ya has decidido qué inmueble rentar?</label>
        <div class="form-check">
         <input class="form-check-input" type="radio" name="Decidido_inm" id="flexRadioDefault1" value="Si" {{ isset($estudio) && $estudio->Decidido_inm == 'Si'? 'checked': '' }}>
         <label class="form-check-label" for="flexRadioDefault1">Sí</label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="Decidido_inm" id="flexRadioDefault2"  value="No" {{ isset($estudio) && $estudio->Decidido_inm == 'No'? 'checked': '' }}>
    <label class="form-check-label" for="flexRadioDefault2">No</label>
    </div>
    </div> 
       
        <div class="col">
        <div class="form-floating mb-3"> 
            <input id="nombre_completo" type="text" name="nombre_completo" value="{{ isset($estudio) ? $estudio->nombre_completo : ''}}" class="form-control" required >
            <label for="floatingInput">Nombre completo</label>
        </div>
        </div>
        </div>
    <div class="row">
    <div class="col">
    <div class="form-floating mb-3">
            <input type="text" name="correo"  value="{{ isset($estudio) ? $estudio->correo : ''}}" class="form-control" required>
            <label for="floatingInput">Correo electrónico de contacto</label>
    </div>
    </div>    
        <div class="col">
        <div class="form-floating mb-3">                     
                <input type="text" name="celular" value="{{ isset($estudio) ? $estudio->celular : ''}}" class="form-control" required>
                <label for="floatingInput">Número de celular</label>
        </div>
        </div>
        </div> 
        <div class="row">   
        <div class="col"> 
        <div class="form-floating mb-3">       
                <input type="text" name="rfc" value="{{ isset($estudio) ? $estudio->rfc : ''}}" class="form-control" required>
                <label for="floatingInput">Rfc</label>
            </div>
         </div>     
        <div class="col"> 
        <div class="form-floating mb-3">       
            <input type="date" name="fecha_nacimiento" value="{{ isset($estudio) ? $estudio->fecha_nacimiento : ''}}" class="form-control" required>
            <label for="floatingInput">Fecha de nacimiento</label>
            </div>
            </div>
            </div>
    <div class="row">
        <div class="col">         
        <label for="floatingInput">Genero</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault1" value="Masculino" {{ isset($estudio) && $estudio->genero == 'Masculino'? 'checked': '' }}>
            <label class="form-check-label" for="flexRadioDefault1">Masculino</label>
     </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault2"  value="Femenino" {{ isset($estudio) && $estudio->genero == 'Femenino'? 'checked': ''}}>
            <label class="form-check-label" for="flexRadioDefault2">Femenino</label>
     </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="genero" id="flexRadioDefault2"  value="Prefiero no decirlo" {{ isset($estudio) && $estudio->genero == 'Prefiero no decirlo'? 'checked': ''}}>
            <label class="form-check-label" for="flexRadioDefault2">Prefiero no decirlo</label>
   
    </div>
    </div>     
         <div class="col">          
         <div class="form-floating mb-3">                                   
            <select class="form-select" aria-label=".form-select-lg example" name="estado_civil" required>
                <option >Estado civil</option>
                <option value="Soltero/a" {{ isset($estudio) && $estudio->estado_civil == 'Soltero/a'? 'selected': '' }}>Soltero/a</option>
                <option value="Casado/a" {{ isset($estudio) && $estudio->estado_civil == 'Casado/a'? 'selected': '' }}>Casado/a>Casado/a</option>
                <option value="Union libre" {{ isset($estudio) && $estudio->estado_civil == 'Union libre'? 'selected': '' }}>Union libre</option>
                <option value="Divorciado/a" {{ isset($estudio) && $estudio->estado_civil == 'Divorciado/a'? 'selected': '' }}>Divorciado/a</option>
                <option value="Viudo/a" {{ isset($estudio) && $estudio->estado_civil == 'Viudo/a'? 'selected': '' }}>Viudo/a</option>
            </select>
         </div>  
         </div>
    </div>
    <div class="row">
        <div class="col">        
        <div class="form-floating mb-3">
        <select class="form-select" aria-label=".form-select-lg example" name="escolaridad" required>
            <option>Grado de escolaridad</option>
            <option value="Ninguno" {{ isset($estudio) && $estudio->escolaridad == 'Ninguno'? 'selected': '' }}>Ninguno</option>
            <option value="Primaria" {{ isset($estudio) && $estudio->escolaridad == 'Primaria'? 'selected': '' }}>Primaria</option>
            <option value="Secundaria" {{ isset($estudio) && $estudio->escolaridad == 'Secundaria'? 'selected': '' }}>Secundaria</option>
            <option value="Preparatoria" {{ isset($estudio) && $estudio->escolaridad == 'Preparatoria'? 'selected': '' }}>Preparatoria</option>
            <option value="Tecnico"{{ isset($estudio) && $estudio->escolaridad == 'Tecnico'? 'selected': '' }}>Tecnico</option>
            <option value="Licenciatura"{{ isset($estudio) && $estudio->escolaridad == 'Licenciatura'? 'selected': '' }}>Licenciatura</option>
            <option value="Maestria" {{ isset($estudio) && $estudio->escolaridad == 'Maestria'? 'selected': '' }}>Maestria</option>
            <option value="Doctorado" {{ isset($estudio) && $estudio->escolaridad == 'Doctorado'? 'selected': '' }}>Doctorado</option>
            </select>
         </div>  
         </div>   
         <div class="col">
             <div class="form-floating mb-3">          
             <input type="text" name="n_personas" value="{{ isset($estudio) ? $estudio->n_personas : ''}}" class="form-control" required >
             <label for="floatingInput"># de personas que dependen económicamente de ti (si no tienes, pon 0)</label>
             </div>
        </div>
    </div>
     <div class="row">
         <div class="col">            
                <div class="form-floating mb-3">                
                <select class="form-select" aria-label=".form-select-lg example" name="situacion_lab" required>
                <option>Situación laboral</option>                              
                <option value="Empleado/Asalariado" {{ isset($estudio) && $estudio->situacion_lab == 'Empleado/Asalariado'? 'selected': '' }}>Empleado/Asalariado</option>
                <option value="Propietario/Socio" {{ isset($estudio) && $estudio->situacion_lab == 'Propietario/Socio'? 'selected': '' }}>Propietario/Socio</option>
                <option value="Independiente" {{ isset($estudio) && $estudio->situacion_lab == 'Independiente'? 'selected': '' }}>Independiente</option>
                <option value="Jubilado/Pensionado" {{ isset($estudio) && $estudio->situacion_lab == 'Jubilado/Pensionado'? 'selected': '' }}>Jubilado/Pensionado</option>
                <option value="Inversionistas/Rentistas" {{ isset($estudio) && $estudio->situacion_lab == 'Inversionistas/Rentistas'? 'selected': '' }} >Inversionistas/Rentistas</option>
                <option value="Amo/a de casa" {{ isset($estudio) && $estudio->situacion_lab == 'Amo/a de casa'? 'selected': '' }} >Amo/a de casa</option>
                <option value="Estudiante" {{ isset($estudio) && $estudio->situacion_lab == 'Estudiante'? 'selected': '' }} >Estudiante</option>
                <option value="Buscando empleo" {{ isset($estudio) && $estudio->situacion_lab == 'Buscando empleo'? 'selected': '' }} >Buscando empleo</option>
                </select>
                </div> 
        </div>
        <div class="col">
            <div class="form-floating mb-3">        
                <input type="text" name="nomb_empre" value="{{ isset($estudio) ? $estudio->nomb_empre : ''}}" class="form-control" required>
                <label for="floatingInput">Nombre de la empresa en que trabajas</label>
            </div>    
        </div>        
    </div>
    
    <div class="row">
        <div class="col">
        <div class="form-floating mb-3">                
                <select class="form-select" aria-label=".form-select-lg example" name="antiguedad_empre" required>
                <option >Antiguedad en la empresa</option>                
                <option value="Menor a 1 año" {{ isset($estudio) && $estudio->antiguedad_empre == 'Menor a 1 año'? 'selected': '' }} >Menor a 1 año</option>
                <option value="1-3 anos" {{ isset($estudio) && $estudio->antiguedad_empre == '1-3 anos'? 'selected': '' }} >1-3 años</option>
                <option value="3-5 anos" {{ isset($estudio) && $estudio->antiguedad_empre == '3-5 anos'? 'selected': '' }} >3-5 años</option>
                <option value="5-10 anos" {{ isset($estudio) && $estudio->antiguedad_empre == 'Menor a 1 ano'? 'selected': '' }} >5-10 años</option>
                <option value="Mayor a 10 anos" {{ isset($estudio) && $estudio->antiguedad_empre == 'Mayor a 10 anos'? 'selected': '' }} >Mayor a 10 años</option>
                <option value="no_aplica" {{ isset($estudio) && $estudio->antiguedad_empre == 'No aplica'? 'selected': '' }} >No aplica</option>
                </select>
            </div>
            </div>
                
            <div class="col">
            <div class="form-floating mb-3">                 
                <select class="form-select" aria-label=".form-select-lg example" name="cargo_empresa"required>
                <option>Descripción de tu cargo (si aplica)</option>               
                <option value="Becario/Auxiliar/Analista" {{ isset ($estudio) && $estudio->cargo_empresa=='Becario/Auxiliar/Analista'? 'selected':'' }}>Becario/Auxiliar/Analista</option>
                <option value="Supervisor/Gerente" {{ isset ($estudio) && $estudio->cargo_empresa=='Supervisor/Gerente'? 'selected':'' }} >Supervisor/Gerente</option>
                <option value="Sub-director" {{ isset ($estudio) && $estudio->cargo_empresa=='Sub-director'? 'selected':'' }} >Sub-director</option>
                <option value="Director" {{ isset ($estudio) && $estudio->cargo_empresa=='Director'? 'selected':'' }} >Director</option>
                <option value="Visepresidente" {{ isset ($estudio) && $estudio->cargo_empresa=='Visepresidente'? 'selected':'' }} >Visepresidente</option>
                <option value="Presidente" {{ isset ($estudio) && $estudio->cargo_empresa=='Presidente'? 'selected':'' }} >Presidente</option>
                <option value="Fundador/Cofundador" {{ isset ($estudio) && $estudio->cargo_empresa=='Fundador/Cofundador'? 'selected':'' }} >Fundador/Cofundador</option>
                <option value="Ejecutivo" {{ isset ($estudio) && $estudio->cargo_empresa=='Ejecutivo'? 'selected':'' }} >Ejecutivo</option>
                <option value="Freelancer/Independiente" {{ isset ($estudio) && $estudio->cargo_empresa=='Freelancer/Independiente'? 'selected':'' }} >Freelancer/Independiente</option>
                <option value="Administrador general" {{ isset ($estudio) && $estudio->cargo_empresa=='Administrador general'? 'selected':'' }} >Administrador general</option>
                <option value="Jubilado" {{ isset ($estudio) && $estudio->cargo_empresa=='Jubilado'? 'selected':'' }} >Jubilado</option>
                <option value="Ejecutivo" {{ isset ($estudio) && $estudio->cargo_empresa=='Ejecutivo'? 'selected':'' }} >Ejecutivo</option>
                </select>
             </div>
             </div>
    </div>
   
    <div class="row">
        <div class="col">
        <div class="form-floating mb-3">
                <select class="form-select" aria-label=".form-select-lg example" name="fuente_ingreso" required>
                <option>Fuente de ingresos principal</option> 
                <option value="Sueldo de nomina" {{ isset ($estudio) && $estudio->fuente_ingreso=='Sueldo de nómina'? 'selected':'' }}  >Sueldo de nómina</option>
                <option value="Honorarios/Comisiones"  {{ isset ($estudio) && $estudio->fuente_ingreso=='Honorarios/Comisiones'? 'selected':'' }}>Honorarios/Comisiones</option>
                <option value="Dividendos/Empresario" {{ isset ($estudio) && $estudio->fuente_ingreso=='Dividendos/Empresario'? 'selected':'' }} >Dividendos/Empresario</option>
                <option value="Pensión" {{ isset ($estudio) && $estudio->fuente_ingreso=='Pensión'? 'selected':'' }} >Pensión</option>
                <option value="Otro" {{ isset ($estudio) && $estudio->fuente_ingreso=='Otro'? 'selected':'' }} >Otro</option>
                </select>
            </div>
            </div> 
        <div class="col">
        <div class="form-floating mb-3">              
            <input type="number" name="ing_men_principal" value="{{ isset($estudio) ? $estudio->ing_men_principal : ''}}" class="form-control" id="ing_men_principal"  required>
            <label for="floatingInput">Ingresos mensuales actividad económica principal (En $MXN)</label>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="form-floating mb-3">               
            <input type="number" name="otros_ingresos" value="{{ isset($estudio) ? $estudio->otros_ingresos : ''}}" class="form-control" id="otros_ingresos" required>
            <label for="floatingInput">Otros ingresos mensuales (En $MXN, si no tienes, pon $0)</label> 
        </div>
        </div>
        <div class="col">
        <div class="form-floating mb-3">  
            <input type="number" name="gastos_mensual" value="{{ isset($estudio) ? $estudio->gastos_mensual : ''}}" class="form-control" id="gastos_mensual" required>
            <label for="floatingInput">Gastos/egresos mensuales (En $MXN)</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"> 
        <div class="form-floating mb-3">    
    <input type="text" name="observacion" value="{{ isset($estudio) ? $estudio->observacion : ''}}" class="form-control"  required>
    <label for="floatingInput">Observaciones (puedes ingresar información que consideres importante para tu solicitud de renta)</label>
    </div>
    </div>
    </div>
    <div class="diadehoy">
        <input type="date"  name="created_at" value="<?php echo date("Y-m-d");?>">
    </div>
    <div class="notaend">
        <p>Todos los datos de este formulario son privados. No te preocupes, toda la información brindada será de uso confidencial y únicamente se analizarán los resultados consolidados.</p>
    </div>
    <br>
    <br>
    <div class="btnnuevo">
      <input type="submit"  value=" {{$modo}} Estudio" class="btn btn-outline ">       
    </div>    
    </div>  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/sweetAlert.js"></script>
    
    
    </body>
