@section('title', 'Home')
@include('components.header')
<main>
    <div class="container mt-5 mb-5">
       
        <p class="text-muted">Bem vindo, {{session(key: 'usuario')->nome}}</p>
        
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">

            <div class="card-body ">
                <h1 class="card-title"><img src="{{ asset('img/projeto.png') }}"> Sistema de controle de tarefas</h1>
                <p class="card-text">Sistema que controla as tarefas do seu dia a dia tanto em casa quanto no
                    trabalho</p>
                
                    <a href="{{route('todos')}}" class="btn btn-success">VER TAREFAS</a>
                    <a href="{{route('formulario')}}" class="btn btn-outline-success">CADASTRAR NOVAS TAREFAS</a>
            </div>
           
            
        </div>
    </div>
</main>
@include('components.footer')
