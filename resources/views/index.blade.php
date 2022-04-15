<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Online</title>
  
</head>
<body id="body-home-azul">
@extends('layout/mobile')
@section('content')
    
    <header class="header-home">

        <div id="data-home">
            <p class="m-0 display-3 cumprimentar">Bom Dia</p>
            <p class="m-0 display-4 hora"></p>
            <span class="lead"><strong> <span id="data"></span></strong></span>
        </div>

            
        
            <div class="box-home-mensagens">
                @foreach ($tarefas as $t)
                    <div class="pt-5">
                        <div class="bg-light p-1 py-2 shadow rounded mx-4 row m-0 box-agenda">
                            <div class="col-10 m-0">
                                <p class="m-0 display-4"><strong>{{$t->titulo}}</strong></p>
                                <p class="m-0 mt-2">{{date('d/m/Y', strtotime($t->data))}}</p>
                                <div class="home-hide" item-id="{{$t->id}}" style="display: none">
                                    <p class="m-0 mt-2">{{$t->descricao}}</p>
                                    <a href="/concluido/1/{{$t->id}}" class="btn btn-primary mt-2">Concluido</a>
                                </div>
                            </div>
                            <a href="#" class="col-2 m-0 icone-mais" item-id="{{$t->id}}"><img src="/img/icone-mais.png" alt="/img/icone-mais.png" class="mt-2"></a>
                        </div>
                    </div>
                @endforeach
            </div>    
        
        

            
    </header>
    <div class="shadow text-center bg-light mt-5">
        <a href="/adicionar_tarefa"><p class="p-4 lead m-0" style="color: #5566f7"><span><img src="/img/icone-mais.png" alt="/img/icone-mais.png"></span><strong>Adicionar uma tarefa pendente</strong></p></a>
    </div>
  


@endsection
    
</body>
</html>