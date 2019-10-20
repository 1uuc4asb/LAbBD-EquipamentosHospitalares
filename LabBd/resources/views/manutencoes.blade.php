@extends('welcome')

@section('title', 'Manutenções')

@section('content')
    <div>
        <table class="table table-fixed">
            <thead>
                <th>Id</th>
                <th>Equipamento N° Serie</th>
                <th>TipoManutencao</th>
                <th>DataManutencao</th>
                <th>DuracaoManutencao</th>
            </thead>
            <tbody>
                @foreach($manutencoes as $manutencao)
                    <tr>
                        <td>{{ $manutencao->Id }} </td>
                        <td>{{ $equipamentos->firstWhere('Id', $manutencao->Equipamento)->NumeroSerie }}</td>
                        <td>{{ $tiposmanutencoes->firstWhere('Id', $manutencao->TipoManutencao)->Nome }}</td>
                        <td>{{ $manutencao->DataManutencao }}</td>
                        <td>{{ $manutencao->DuracaoManutencao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection