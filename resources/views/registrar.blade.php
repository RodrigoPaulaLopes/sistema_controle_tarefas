<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container mt-5">

            <div class="card shadow-lg p-3 mb-5 bg-body rounded mt-5">
                <div class="card-header">
                    <h1>Informações</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('registrar') }}" method="post">
                        @csrf
                        <input type="hidden" name="id">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="Rodrigo de paula lopes" name="nome"  value="{{ $usuario->nome ?? '' }}">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingPassword"
                                placeholder="exemplo@email.com"  name="email" value="{{ $usuario->email ?? '' }}">
                            <label for="floatingPassword">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="RodrigoPLopes"
                                 value="{{ $usuario->email ?? '' }}">
                            <label for="floatingInput">Usuario</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="" 
                                value="{{ $usuario->senha ?? '' }}">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <button type="submit" class="btn btn-outline-success">Registrar</button>
                            <a href="{{ route('login') }}" class="btn btn-outline-success">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
