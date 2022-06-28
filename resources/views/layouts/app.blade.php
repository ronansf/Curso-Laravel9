<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
                @yield('title') - Facilta Acertos na Loteria
        </title>

        <link rel="shortcut icon" href="{{ url('images/favicon.ico')}}" type="image/png">

        <script src="https://cdn.tailwindcss.com"></script>

        <div class="container mx-auto">
           <center><img src= "{{ url('images/logo.jpg') }}" type="image/jpg" align="middle"></center>
        </div>
        <hr>


    </head>
    <body class="bg-gray-50">

        <div class="container mx-auto px-4 py-8">
            @yield('content')
        </div>

    </body>
    <hr><br>
    <div class="container mx-auto  px-8 py-8">
        <center> <img src= "{{ url('images/logoverde.jpg') }}" type="image/jpg" > </center>
    </div>
    <div id='corp' style ='text-align:center'>
        <p> © Copyright 2022 - A Facilita Acertos na Loteria  </p>
    </div>
</html>
