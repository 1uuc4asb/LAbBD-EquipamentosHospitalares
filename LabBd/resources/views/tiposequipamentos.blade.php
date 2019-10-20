@extends('welcome')

@section('title', 'Tipos Equipamentos')

@section('content')
    <div>
        <table class="table table-fixed">
            <thead>
                <th>Id</th>
                <th>Nome</th>
            </thead>
            <tbody>
                @foreach($tiposequipamentos as $tipoequipamentos)
                    <tr>
                        <td>{{ $tipoequipamentos->Id }} </td>
                        <td>{{ $tipoequipamentos->Nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection