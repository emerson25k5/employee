<div class="modal fade" id="create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Novo funcionário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">

                        <form id="create-funcionario" method="POST" action="{{ route('funcionario.store') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <span class="input-group-text">Nome</span>
                                <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">E-mail</span>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">CPF</span>
                                <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Cargo</span>
                                <input type="text" name="cargo" class="form-control" value="{{ old('cargo') }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Admissão</span>
                                <input type="date" name="dataAdmissao" class="form-control" value="{{ old('dataAdmissao') ?? date('Y-m-d') }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Salário</span>
                                <input type="number" name="salario" step="0.01" class="form-control" value="{{ old('salario') }}">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="create-funcionario" class="btn btn-success">Salvar</button>
            </div>

        </div>
    </div>
</div>