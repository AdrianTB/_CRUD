@extends('layouts.app')
@section('content')
PAGINA DE CREACION EMPLEADOS

<form method="post" action="{{ url ('/empleados/'.$empleado->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }} 
    
    @include('empleados.form', ['Modo'=>'editar'])
    
    
</form>
@endsection

