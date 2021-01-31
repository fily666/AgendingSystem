@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crear nuevo eventos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Home</a>
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

<form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del evento:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre del evento" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="file" name="logo" accept="image/*" class="form-control" placeholder="logo" required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fecha inicio del evento:</strong>
                <input type="date" name="fechainicial" class="form-control" placeholder="Fecha inicial" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Fecha fin del evento::</strong>
                <input type="date" name="fechafinal"  class="form-control" placeholder="Fecha final" required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Hora inicio del evento:</strong>
                <input type="time" name="horainicial" class="form-control" placeholder="Hora inicial" required>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Hora fin del evento:</strong>
                <input type="time" name="horafinal" class="form-control" placeholder="Hora final" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duracion estimada por encuentro en munitos:</strong>
                <input type="number" name="duracion" class="form-control" placeholder="Duracion en minutos" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalle:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" required></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">crear</button>
        </div>
    </div>

</form>
@endsection