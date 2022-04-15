@extends('layout.mobile')
@section('content')
<div class="fundo-concluido">
    
<div style="position: relative" class="concluido">
    @foreach ($tarefas as $t)
        <div class="pt-5">
            <div class="bg-light p-1 py-2 shadow rounded mx-4 row m-0 box-agenda">
                <div class="col-10 m-0">
                    <p class="m-0 display-4"><strong>{{$t->titulo}}</strong></p>
                    <p class="m-0 mt-2">{{date('d/m/Y', strtotime($t->data))}}</p>
                    <div class="home-hide" item-id="{{$t->id}}" style="display: none">
                        <p class="m-0 mt-2">{{$t->descricao}}</p>
                        <a href="/deletar/{{$t->id}}" class="btn btn-danger mt-2">Deletar</a>
                        <img class="icone-feito" src="/img/feito.png" alt="">
                    </div>
                </div>
                <a href="#" class="col-2 m-0 icone-mais" item-id="{{$t->id}}"><img src="/img/icone-mais.png" alt="/img/icone-mais.png" class="mt-2"></a>
            </div>
            
        </div>
    @endforeach
</div> 

</div>
@endsection