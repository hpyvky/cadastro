@extends('layout.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/categorias/{{ $cat->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input type="text" class="form-control" name="nomeCategoria" value="{{ $cat->nome }}"
                           id="idCategoria" placeholder="Categoria"/>
                </div>
                <button type="submit" class="btn btn-primary btn-sn">Salvar</button>
                <button typr="cancel" class="btn btn-danger btn-sn">Cancelar</button>
            </form>
        </div>
    </div>
@endsection