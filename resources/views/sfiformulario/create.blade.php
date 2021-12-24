
<form action="{{ url('/sfiformulario')}}" method="POST">
@csrf
@include('sfiformulario.form',['modo'=>'Aplicar']);

</form>
