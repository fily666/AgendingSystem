@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Empresa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('empresas.create') }}"> Create New Empresas</a>
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
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($empresas as $empresa)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $empresa->name }}</td>
        <td>{{ $empresa->detail }}</td>
        <td>
            <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('empresas.show',$empresa->id) }}"><i class="fas fa-search"></i></a>

                <a class="btn btn-primary" href="{{ route('empresas.edit',$empresa->id) }}"><i class="fas fa-edit"></i></a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $empresas->links() !!}

@endsection