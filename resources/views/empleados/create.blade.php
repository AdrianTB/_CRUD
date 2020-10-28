@extends('layouts.app')
@section('content')

<div class="container">
    
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul class="list-unstyled">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


Seccion para crear empleados
<form action=" {{ url('/empleados')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >

    {{ csrf_field() }}  
    @include('empleados.form',['Modo'=>'crear'])  
    
</form>
</div>
@endsection


