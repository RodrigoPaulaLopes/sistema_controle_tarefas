@section('title', 'Informações');
@include('components.header');

<main>
    <div class="container">
        <h1>Informações</h1>
        <form action="" method="post">
            @csrf
            <input type="hidden" name="id">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Rodrigo de paula lopes" readonly value="{{$usuario->nome ?? ""}}">
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingPassword" placeholder="exemplo@email.com" readonly value="{{$usuario->email ?? ""}}">
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="RodrigoPLopes" readonly value="{{$usuario->email ?? ""}}">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="" readonly value="{{$usuario->senha ?? ""}}">
                <label for="floatingPassword">Senha</label>
            </div>
        </form>
    </div>
</main>
@include('components.footer');
