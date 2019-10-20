@extends('welcome')

@section('title', 'Equipamentos Status')

@section('content')
    <div>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>EquipamentoStatus</th>
            </thead>
            <tbody>
                @foreach($equipamentostatus as $status)
                    <tr>
                        <td>{{ $status->Id }} </td>
                        <td>{{ $status->EquipamentoStatus }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection