<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    

    <header>
        <div class="bg-info container-fluid shadow">
        <nav class="navbar navbar-expand-lg navbar-light container">
            <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="/img/logo.png"></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-light" href="/">Pendentes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="/concluido">Concluidos</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </header>
    @yield('content')

   
    <footer class="bg-light footer">
      <p class="lead p-5 text-center shadow m-0">Agenda Online</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/js.js"></script>
</body>
</html>