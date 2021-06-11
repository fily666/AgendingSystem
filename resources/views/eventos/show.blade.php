@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detalle de evento</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark" href="{{ route('eventos.index') }}"> <i class="bi bi-box-arrow-left"></i> Home</a></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre del evento:</:< /strong>
                {{ $evento->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagen:</strong>
            {{ $evento->logo }}
            <img src="{{ $evento->logo }}" width="20%">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha inicio del evento::</strong>
            {{ $evento->fechainicial }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fecha fin del evento::</strong>
            {{ $evento->fechafinal }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Hora inicio del evento::</strong>
            {{ $evento->horainicial }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Hora fin del evento::</strong>
            {{ $evento->horafinal }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Duracion estimada por encuentro en munitos:</strong>
            {{ $evento->duracion }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $evento->detail }}
        </div>
    </div>
</div>
@endsection