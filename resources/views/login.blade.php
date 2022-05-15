<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            
            <div class="fadeIn first">
                <img src="{{ asset('img/projeto.png') }}" id="icon" alt="User Icon" />
                <h1>Controle de Tarefas</h1>
            </div>
            @if (isset($msg))
                <div class="container">

                    <div class="alert alert-danger">
                        <p>{{ $msg }}</p>
                    </div>
                </div>
            @endif
            <!-- Login Form -->
            <form action="{{ route('entrar') }}" method="POST">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
                <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>


            <div id="formFooter">
                <a class="underlineHover" href="{{ route('registrar')}}">Criar uma nova conta</a>
            </div>

        </div>
    </div>
</body>

</html>
