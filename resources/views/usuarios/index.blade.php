@extends('layouts.admin')

@section('content')
<div class="w3-container" id="contact">
    <h1 class="w3-xxxlarge w3-text-red"><b>Usuarios.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Crear nuevo Usuario</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <br>

    <table class="w3-table-all w3-card-4">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciónes</th>

        </tr>

        @foreach($usuario as $userr)
        <tr>
            <th>{{$userr->id}} </th>
            <td>{{$userr->name}} </td>
            <td>{{$userr->email}} </td>
            <td>{{$userr->created_at}} </td>
            <td>
                <form action="{{ route('usuarios.destroy',$userr->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('usuarios.show',$userr->id) }}"><i class="fas fa-search"></i></a>

                    <a class="btn btn-primary" href="{{ route('usuarios.edit',$userr->id) }}"><i class="fas fa-edit"></i></a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    
</div>

@endsection