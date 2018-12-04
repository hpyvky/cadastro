@extends('layout.app', ["current" => "index"])

@section('body')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de produtos</h5>
                    <p class="card-text">
                        Cadastramos todos os seus produtos.
                    </p>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de categorias</h5>
                    <p class="card-text">
                        Cadastre as categorias dos produtos.
                    </p>
                    <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection