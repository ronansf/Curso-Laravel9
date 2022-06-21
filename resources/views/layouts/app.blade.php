<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
                @yield('title') - Facilta Acertos na Loteria
        </title>
        <div id='logo' style ='text-align:center'>
            <img src= 'arquivos/logo.jpg'>
        </div>
        <hr>


    </head>
    <body>

        <div class="app">
            @yield('content')
        </div>

    </body>
    <hr><br>
    <div id='logo-rodape' style ='text-align:center'>
                <img src= 'arquivos/logoverde.jpg'>
    </div>
    <div id='corp' style ='text-align:center'>
        <p> © Copyright 2022 - A Facilita Acertos na Loteria  </p>
    </div>
</html>
