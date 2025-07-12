<div class="modal fade" id="edit-{{ $funcionario->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Edição do Funcionário: {{ $funcionario->nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">

                        <form id="edit-funcionario-{{ $funcionario->id }}" method="POST" action="{{ route('funcionario.update', $funcionario->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-nome">Nome</span>
                                <input type="text" name="nome" class="form-control" value="{{ $funcionario->nome }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-email">E-mail</span>
                                <input type="email" name="email" class="form-control" value="{{ $funcionario->email }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-cpf">CPF</span>
                                <input type="text" name="cpf" class="form-control" value="{{ $funcionario->cpf }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-cargo">Cargo</span>
                                <input type="text" name="cargo" class="form-control" value="{{ $funcionario->cargo }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-admissao">Admissão</span>
                                <input type="date" name="dataAdmissao" class="form-control" value="{{ $funcionario->dataAdmissao->format('Y-m-d') }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon-salario">Salário</span>
                                <span class="input-group-text" id="basic-addon-salario">R$</span>
                                <input type="text" name="salario" class="form-control" value="{{ number_format($funcionario->salario, 2, ',', '.') }}">
                            </div>

                        </form>


                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="edit-funcionario-{{ $funcionario->id }}"  class="btn btn-success">Salvar</button>
            </div>

        </div>
    </div>
</div>