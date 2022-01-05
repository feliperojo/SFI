
<form action="{{ url('/sfiformulario/envio')}}" method="POST">
@csrf
@include('sfiformulario.form',['modo'=>'Aplicar']);

</form>
