@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Eventos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('eventos.create') }}"> Crear nuevo evento</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Detalle</th>
        <th width="200px">Accion</th>
    </tr>
    @foreach ($eventos as $evento)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $evento->name }}</td>
        <td>{{ $evento->detail }}</td>
        <td>
            <form action="{{ route('eventos.destroy',$evento->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('eventos.show',$evento->id) }}"><i class="fas fa-search"></i></a>

                <a class="btn btn-primary" href="{{ route('eventos.edit',$evento->id) }}"><i class="fas fa-edit"></i></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $eventos->links() !!}

@endsection