@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-dark">
    <thead class="thead-light">
        <tr>

            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($users as $user)

            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ url('/user/' . $user->id) }}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Estas seguro de eliminar este registro?')"
                            class="btn btn-danger" value="eliminar">
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
