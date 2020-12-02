@if(auth()->user()->TipoUsuario == 1)

@include('home_admin')

@else

@include('home_estandar')

@endif


