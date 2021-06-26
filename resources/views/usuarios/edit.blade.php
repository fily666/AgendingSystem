@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Usuario</h2>

        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('usuarios.index') }}"> <i class="bi bi-box-arrow-left"></i> Home</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('usuarios.update',$usuario->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                <input type="text" name="email" value="{{ $usuario->email }}" class="form-control" placeholder="email" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cotraseña:</strong>
                <input type="password" name="password" value="" class="form-control" placeholder="password" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confimar Contraseña:</strong>
                <input type="text" name="password_confirmation" value="" class="form-control" placeholder="password_confirmation" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" name="btn_actualizar" class="btn btn-dark">Actualizar</button>
        </div>
    </div>

</form>



@endsection
