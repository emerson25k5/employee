<div class="modal fade" id="delete-{{ $funcionario->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Confirmar exclusão do funcionário: {{ $funcionario->nome }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="confirma-exclusao-{{ $funcionario->id }}" method="POST" action="{{ route('funcionario.destroy', $funcionario->id) }}">
                    @csrf
                    @method('DELETE')
                    <p>Tem certeza que deseja excluir o funcionário <strong>{{ $funcionario->nome }}</strong>?</p>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="confirma-exclusao-{{ $funcionario->id }}" class="btn btn-success">Excluir</button>
            </div>

        </div>
    </div>
</div>