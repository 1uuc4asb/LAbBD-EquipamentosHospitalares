@extends('welcome')

@section('title', 'Tipos Manutenções')

@section('content')
    <div>
        <table class="table table-fixed">
            <thead>
                <th>Id</th>
                <th>Nome</th>
            </thead>
            <tbody>
                @foreach($tiposmanutencoes as $tipomanutencao)
                    <tr>
                        <td>{{ $tipomanutencao->Id }} </td>
                        <td>{{ $tipomanutencao->Nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection