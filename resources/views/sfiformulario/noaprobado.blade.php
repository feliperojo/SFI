<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Estudio Negado!</title>
  </head>
  <div class="container">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>



  </div>
  <body>
  <form>
 <div class="container overflow">
  <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Resultado del estudio</h4>
  <p>
Estimado/a <b style = "text-transform:uppercase;">{{$estudiopdf->nombre_completo}}</b>,

Lamentamos informarte que nuestros analistas han dimitido tu solicitud de Preaprobación de Renta referente a la aplicación para el monto de <b style = "text-transform:uppercase;">{{$estudiopdf->Presupues_mens}}</b>. 

¡Pero tienes más opciones! Con la información brindada, puedes aplicar para obtener una Garantía de Renta para el arrendamiento de un inmueble cuyo monto mensual sea algo menor. 
</p>
  <hr>
  <p class="mb-0">Gracias por tu confianza.</p>

    
  <a href="{{ url('sfiformulario/') }}" class="btn btn-primary" >Regresar</a>
  </div>
  </div>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

