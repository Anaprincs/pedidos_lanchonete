<div class="mt-5">

    @if (session()->has('success'))
        {{-- abertura de if --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
    @endif
    {{-- fechamento de if --}}

    <div class="card">
        <h5 class="card-header"> Editar Tarefas</h5>
            <div class="card-body">
                <form wire:submit.prevent="salvar">
                    <div class="mb-3">
                        <label for="nome" class="form-label"> Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="ex.:Tarefa" wire:model.defer="nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"> Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="ex.:Tarefa" wire:model.defer="email">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label"> Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            placeholder="ex.:Tarefa" wire:model.defer="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label"> Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                            placeholder="ex.:Tarefa" wire:model.defer="endereco">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label"> Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha"
                            placeholder="ex.:Tarefa" wire:model.defer="password">
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success"> Cadastrar </button>
                    </div>
                </form>
            </div>
    </div>

</div>