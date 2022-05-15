@section('title', 'Todos');
@include('components.header')
<main>
    <div class="container">
        <h1>Todas as Tarefas</h1>
    </div>
    @if (isset($msg))
        <div class="container">

            <div class="alert alert-success">
                <h2>{{ $msg }}</h2>
            </div>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('todos') }}" method="get">
            <div class="form-floating mb-3 col-sm-4">

                <div class="input-group mb-3">
                    <input type="text" class="form-control border border-success" placeholder="Pesquise..."
                        aria-label="Recipiente para nickname" aria-describedby="basic-addon2" name="tarefa">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success border border-success" id="basic-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>

            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-success text-white">
                        <th>id</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Data de entrada</th>
                        <th>Prazo</th>
                        <th>Vencimento</th>
                        <th>Status</th>
                        <th>Usuario</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < count($tarefas); $i++)
                       

                        <tr>
                            <td>{{ $tarefas[$i]->id }}</td>
                            <td>{{ $tarefas[$i]->nome_tarefa }}</td>
                            <td>{{ $tarefas[$i]->descricao }}</td>
                            <td>{{ date('d/m/Y', strtotime($tarefas[$i]->dataEmissao)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($tarefas[$i]->dataPrazo)) }}</td>
                            @if (date('Y-m-d') >= $tarefas[$i]->dataPrazo)
                                <td><span class="badge bg-danger">Atrasada</td>
                            @else
                                <td><span class="badge bg-success">No prazo</td>
                            @endif

                            @if ($tarefas[$i]->status == 'A')
                                <td><span class="badge bg-warning">Em Aberto</td>
                            @else
                                <td><span class="badge bg-info">Finalizada</td>
                            @endif
                            </td>
                            <td>{{ $tarefas[$i]->usuario_nome }}</td>
                            <td>
                                <a class="badge bg-success"
                                    href="{{ route('editar', ['id' => $tarefas[$i]->id]) }}"><i
                                        class="fas fa-edit"></i></a>
                                <a class="badge bg-danger"
                                    href="{{ route('excluir', ['id' => $tarefas[$i]->id]) }}"><i
                                        class="fas fa-trash"></i></a>
                                <a class="badge bg-info" href="{{ route('finalizar', ['id' => $tarefas[$i]->id]) }}"><i
                                        class="fa fa-sign-out"></i>
                                </a>

                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div>
</main>
@include('components.footer')
