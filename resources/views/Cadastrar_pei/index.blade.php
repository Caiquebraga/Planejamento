@extends('layout')

@section('content')
    <form method="POST" action="{{ route('cadastrarPei') }}">
        @csrf
            <div class="form-group">
                <label for="exampleInput">Descricao Planejamento</label>
                <input type="input" class="form-control" id="plaDescricao" name="plaDescricao" aria-describedby="emailHelp"
                    placeholder="Descricao do Planejamento">
            </div>
            <div class="form-group">
                <label for="exampleInputdate">Data Inicio</label>
                <input type="date" class="form-control" id="plaDataInicio" name="plaDataInicio"
                    aria-describedby="emailHelp" placeholder="Data Inicio">
            </div>

            <div class="form-group">
                <label for="exampleInputdate">Data Final</label>
                <input type="date" class="form-control" id="plaDataFinal" name="plaDataFinal"
                    aria-describedby="emailHelp" placeholder="Data Final">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="plaPublicacao" name="plaPublicacao">
                <label class="form-check-label" for="exampleCheck1">Publicar</label>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </form>
    @endsection
