@section('title', 'Formulario');
@include('components.header')
<main>
    <div class="container">
        <h1>{{isset($tarefa) ? "Alterar" : "Cadastrar"}} Tarefa</h1>
    </div>
    {{-- <p class="text-muted">Bem vindo, {{session(key: 'usuario')->nome}}</p> --}}
    @if (isset($msg))
    <div class="container">

        <div class="alert alert-success">
            <h2>{{$msg}}</h2>
            
        </div>
    </div>
    @endif
    <div class="container">
        <form action="{{route('formulario')}}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{isset($tarefa) ? $tarefa->id : ""}}">
            <input type="hidden" id="status" name="status" value="{{isset($tarefa) ? $tarefa->status : "A"}}">
            <input type="hidden" id="status" name="usuario" value="{{isset($tarefa) ? $tarefa->usuario : session(key: 'usuario')->id}}">
            <div class="form-floating mb-3">
                <input type="text" value="{{isset($tarefa) ? $tarefa->nome : ""}}" class="form-control rounded-pill border border-success" name="nome" id="floatingInput"
                    placeholder="Digite o nome da tarefa">
                <label for="floatingInput">Titulo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control rounded-pill border border-success" name="dataPrazo" id="dataPrazo"
                    placeholder="Data de término da tarefa"  value="{{isset($tarefa) ? date('d/m/Y', strtotime($tarefa->dataPrazo)) : ""}}">
                <label for="floatingPassword">Prazo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  class="form-control rounded-pill border border-success" name="dataEmissao"id="floatingInput"
                    placeholder="Data atual da tarefa" value="{{isset($tarefa) ? date('d/m/Y', strtotime($tarefa->dataEmissao)) : date('d/m/Y') }}" readonly>
                <label for="floatingInput">Emissão</label>
            </div>
            <div class="form-floating mb-3 ">
                <textarea class="form-control rounded-pill border border-success" name="descricao" placeholder="Digite a descrção da tarefa" id="floatingTextarea2"
                    style="height: 60px">{{isset($tarefa) ? $tarefa->descricao : ""}}</textarea>
                <label for="floatingTextarea2"> Descrição</label>
            </div>
            <div class="form-floating text-center mb-5">
                <input type="submit" value="{{isset($tarefa) ? "Alterar" : "Cadastrar"}}" class="btn btn-outline-success rounded-pill">
            </div>
        </form>
    </div>
</main>
@include('components.footer')
