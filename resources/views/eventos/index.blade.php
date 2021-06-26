@extends('layouts.admin')

@section('content')
<div class="w3-container" id="contact">
    <h1 class="w3-xxxlarge w3-text-red"><b>Eventos.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <div class="pull-right">
        <a class="btn btn-dark" name="eventos" href="{{ route('eventos.create') }}"> Crear nuevo evento</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <br>

    <table class="w3-table-all w3-card-4">
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

                    <a class="btn btn-info" name="ver_evento" href="{{ route('eventos.show',$evento->id) }}"><i class="bi bi-file-diff-fill"></i></a>

                    <a class="btn btn-primary" name="edit_evento" href="{{ route('eventos.edit',$evento->id) }}"><i class="bi bi-pencil-fill"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><i class="bi bi-eraser-fill"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $eventos->links() !!}

</div>

@endsection