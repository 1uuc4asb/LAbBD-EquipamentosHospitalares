@extends('welcome')

@section('title', 'Hospitais')

@section('content')
    <div>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Endereço</th>
            </thead>
            <tbody>
                @foreach($hospitais as $hospital)
                    <tr>
                        <td>{{ $hospital->Id }} </td>
                        <td>{{ $hospital->Nome }}</td>
                        <td>{{ $hospital->Estado }}</td>
                        <td>{{ $hospital->Cidade }}</td>
                        <td>{{ $hospital->Endereco }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection