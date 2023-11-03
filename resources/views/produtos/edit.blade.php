@extends('layout')
    @section('content')

        <div class="card" style="margins:20px">
            <div class="card-header">Editar produto</div>
                <div class="card-body">
                    <form method="post" action="{{route('produto.update', ['produto'=>$produto])}}">
                         @csrf
                         @method('put')
                        <label>Nome do produto</label><br>
                        <input type="text" name="nome do produto" id="nome_do_produto" class="form-control" value="{{$produto->nome_do_produto}}"></input>
                        <label>Descrição</label><br>
                        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$produto->descricao}}"></input>
                        <label>Preço</label><br>
                        <input type="text" name="preco do produto" id="preco_do_produto" class="form-control" value="{{$produto->preco_do_produto}}"></input>
                        <label>Quantidade</label><br>
                        <input type="text" name="quantidade em estoque" id="quantidade_em_estoque" class="form-control" value="{{$produto->quantidade_em_estoque}}"></input><br>
                        <input type="submit" value="Editar" class="btn btn-success"></input>
                    </form>
                    <a href="{{route("produto.index")}}"><button class="btn btn-secondary">Voltar</button></a>
                </body>
        </div>

    @stop