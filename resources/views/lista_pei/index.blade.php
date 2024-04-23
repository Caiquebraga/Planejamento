@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <table class="table caption-top">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de Início</th>
                    <th scope="col">Data Final</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plaEstra as $key => $plaEs)
                    <tr>
                        <td>{{ $plaEs->plaDescricao }}</td>
                        <td>{{ $plaEs->plaDataInicio }}</td>
                        <td>{{ $plaEs->plaDataFinal }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
