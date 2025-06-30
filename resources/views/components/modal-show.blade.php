<div class="modal fade" id="show-{{ $funcionario->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Detalhes do Funcionário: {{ $funcionario->nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-nome">Nome</span>
                            <input type="text" class="form-control" value="{{ $funcionario->nome }}" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-email">E-mail</span>
                            <input type="text" class="form-control" value="{{ $funcionario->email }}" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-cpf">CPF</span>
                            <input type="text" class="form-control" value="{{ $funcionario->cpf }}" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-cargo">Cargo</span>
                            <input type="text" class="form-control" value="{{ $funcionario->cargo }}" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-admissao">Admissão</span>
                            <input type="text" class="form-control" value="{{ $funcionario->dataAdmissao->format('d/m/Y') }}" disabled>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon-salario">Salário</span>
                            <input type="text" class="form-control" value="R$ {{ number_format($funcionario->salario, 2, ',', '.') }}" disabled>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3 col">
                                <span class="input-group-text" id="basic-addon-created">Criado em</span>
                                <input type="text" class="form-control" value="{{ $funcionario->created_at->format('d/m/Y H:i') }}" disabled>
                            </div>

                            <div class="input-group mb-3 col">
                                <span class="input-group-text" id="basic-addon-updated">Atualizado em</span>
                                <input type="text" class="form-control" value="{{ $funcionario->updated_at->format('d/m/Y H:i') }}" disabled>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div>
    </div>
</div>