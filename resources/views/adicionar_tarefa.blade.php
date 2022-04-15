<body class="adicionar">
    @extends('layout.mobile')
    @section('content')
       
    <h1 class="display-3 text-center mt-3">adicionar</h1>
    <div class="px-3">
        <form action="/cadastrar_tarefa" class="form-adicionar my-4">
            <p>
                <label class="m-0" for="titulo">No que está pensando?</label> <br>
                <input class="w-100 p-2" type="text" name="titulo" id="titulo" placeholder="Escreva...">
            </p>
            <p>
                <label class="m-0" for="data">Coloque a data</label> <br>
                <input class="w-100 p-2" type="date" name="data" id="data">
            </p>
            <p>
                <label class="m-0" for="mensagem">Sua mensagem</label> <br>
                <textarea class="w-100 px-2 pb-5 pt-1" name="mensagem" id="mensagem" placeholder="Escreva..."></textarea>
            </p>
            <p><button class="btn btn-primary">Enviar</button></p>
        </form>
    </div>

</div>    


@endsection
</body>
    
