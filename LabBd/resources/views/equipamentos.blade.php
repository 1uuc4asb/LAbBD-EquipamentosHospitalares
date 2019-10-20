@extends('welcome')

@section('title', 'Equipamentos')

@section('content')
    <div>
        <table class="table table-fixed">
            <thead>
                <th>Id</th>
                <th>HospitalPertencente</th>
                <th>SetorPertencente</th>
                <th>Nome</th>
                <th>EquipamentoStatus</th>
                <th>TipoEquipamento</th>
                <th>NumeroSerie</th>
                <th>DataAquisicao</th>
            </thead>
            <tbody>
                @foreach($equipamentos as $equipamento)
                    <tr>
                        <td>{{ $equipamento->Id }}</td>
                        <td>{{ $hospitais->firstWhere('Id', $equipamento->HospitalPertencente)->Nome }}</td>
                        <td>{{ $setores->firstWhere('Id', $equipamento->SetorPertencente)->Nome }}</td>
                        <td>{{ $equipamento->Nome }}</td>
                        <td>{{ $equipamentostatus->firstWhere('Id', $equipamento->EquipamentoStatus)->EquipamentoStatus }}</td>
                        <td>{{ $tiposequipamento->firstWhere('Id', $equipamento->TipoEquipamento)->Nome }}</td>
                        <td>{{ $equipamento->NumeroSerie }}</td>
                        <td>{{ $equipamento->DataAquisicao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection