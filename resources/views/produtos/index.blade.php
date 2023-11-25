@extends('layout')

@section('content')
<div class="row" style="margin:20px;">
    <div class="table-responsive">
        <h2> <img src="logo.jpg" width="80px"> Catálogo de produtos</h2>
            <br>
            <div class="card-body">
                <a href="{{ route('produto.create') }}" class="btn btn-success" title="Adicionar produto"> 
                    Adicionar produto
                </a>
            </div>
            <div>
                @if (session()->has('sucess'))
                    <div>
                    {{session('sucess')}}
                    </div>
                @endif
            </div>
            <br>
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome do produto</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Ações</th>
                        </tr>    
                    </thead>
                        @foreach($produtos as $produto)
                             <tr>
                                 <td>{{$produto->id}}</td>
                                 <td>{{$produto->nome_do_produto}}</td>
                                 <td>{{$produto->descricao}}</td>
                                 <td>{{$produto->preco_do_produto}}</td>
                                 <td>{{$produto->quantidade_em_estoque}}</td>
                                 <td>
                                     <a href="{{route("produto.edit", ["produto" => $produto])}}" titlle="Editar produto"><button class="btn btn-warning">Editar</button></a>
                                 </td>
                                 <td>
                                 <form method="post" action="{{route('produto.destroy', ['produto' => $produto])}}">
                                 @csrf
                                 @method('delete')
                                 <a href="" titlle="Excluir produto"><button class="btn btn-danger">Excluir</button></a>
                                 </form>
                                 </td>
                             </tr>                        
                         @endforeach
            </table>
    </div>
</div>