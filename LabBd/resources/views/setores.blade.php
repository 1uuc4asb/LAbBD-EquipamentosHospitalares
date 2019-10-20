@extends('welcome')

@section('title', 'Setores')

@section('content')
    <div>
        <table class="table table-fixed">
            <thead>
                <th>Id</th>
                <th>Hospital pertencente</th>
                <th>Nome</th>
            </thead>
            <tbody>
                @foreach($setores as $setor)
                    <tr>
                        <td>{{ $setor->Id }} </td>
                        <td>{{ $hospitais->firstWhere('Id', $setor->HospitalPertencente)->Nome }}</td>
                        <td>{{ $setor->Nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection