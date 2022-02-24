<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Certificado!</title>
  </head>
  
      <body class="bodypdf">
      <table>
  <td><img src="{{public_path('img/renrtlogo.png')}}" alt="" style="width: 320px; height: 160px; font-family: 'Roboto', sans-serif;">   </td>
  <td>     <pre><p align="right" font-zise="2px" style="color: #1B5B94;  font-size: 13px;">Av Insurgente 1647, piso 12
          CDMX, Mexico
          +57 317 431 8376
          contacto@rent10.max
          www.rent10.mx</p></pre></td>
         
</tr>
</table>
    
  
  <style>
    body {
      font-family: 'Roboto', sans-serif;
        height: 842px;
        width: 700px;
        /* to centre page on screen*/
        margin-left: 5px;
        margin-right: 5px;
       /* font-family: Arial, Helvetica, sans-serif;*/
        font-size: 18px;
        
    }
            .col{
              font-family: Arial;
              color:steelblue;
              font-size: 18px;
            }
            body .div .pre .b {
              color:steelblue;
            }
            #footer {
                position:fixed;
                left:0px;
                bottom:0px;
                height:80px;
                width:100%;
               /* background:rgb(212, 212, 212);*/
                font-size: 15px;
                font-family: 'Roboto', sans-serif;

     
     
      
        
    }
    </style>  
    <div class="container " style="margin-left:10px; margin-right: 5px; width: 680px;">  
    <pre><b style="color: #1B5B94; font-size: 21px; font-family: 'Roboto', sans-serif;">         CERTIFICADO DE PREAPROBACIÓN PARA RENTAR</b>
{{$estudiopdf->created_at->isoFormat('dddd D \d\e MMMM \d\e\l Y')}}



SFI Servicios Inmobiliarios México, S.A. de C.V. <b>[Rent10]</b>, con RFC SSI210706KY1 y
sede en Av. Insurgentes Sur 1647 - Piso 12, Despacho 1202, CDMX, México

<b>CERTIFICA que</b>

El inquilino <b style = "text-transform:uppercase;">{{$estudiopdf->nombre_completo}}</b>  aplica para obtener una garantía de
renta con la/s compañía/s integradas a Rent10 para el arrendamiento de un inmueble de uso residencial
cuyo monto mensual no supere los <b style="color: #1B5B94;">$14.000 MXN</b> entre renta y mantenimiento.

<b>¿Cómo usar el certificado?</b>

Cuando encuentres una propiedad para rentar y el propietario haya dado su visto bueno, comunícate con tu
agente inmobiliario para que se ponga en contacto con nosotros y podamos continuar el proceso a través de
él/ella.




Atentamente,



Katherine Aguilera
Analista de Riesgo</pre>

   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
     
    
    <div  id="footer" >  
    <hr size=10 style="width: 100%; margin:0; background:#1B5B94;">   
    <pre><p> Recuerda: Esto no es una garantía para rentar. Indica únicamente que con la información brindada, el usuario podría obtener una
  Garantía de Renta con Rent10. El trámite está sujeto a análisis de riesgo crediticio, validación de documentación pendiente de envío, 
  aprobación de la compañía y realización del pago correspondiente.</p></pre>
  </div>
  </body> 
 
</html>