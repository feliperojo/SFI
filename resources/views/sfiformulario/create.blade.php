<form action="{{ route('sfiformulario.store')}}" method="POST">
    @csrf
   @include('sfiformulario.form',['modo'=>'Aplicar']);   
</form>