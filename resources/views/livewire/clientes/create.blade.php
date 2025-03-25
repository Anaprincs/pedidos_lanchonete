<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-6 mx-auto">
        <div class="card bg-info " >
            <h5 class="card-header fw-bold text-center" style="font-family:cursive"  >Cadastro de Cliente</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-bold text-center">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"
                            placeholder="ex:Cadastro" wire:model.defer="nome">
                    </div>

                    <div class="mb-3">
                        <label for="endereco" class="form-label fw-bold text-center">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="nome"
                        wire:model.defer="endereco">
                    </div>

                    <div class="mb-3 fw-bold ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="ex:xxx@xxx.com" wire:model.defer="email">
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class="form-label fw-bold">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            wire:model.defer="telefone">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label fw-bold">cpf</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" 
                            wire:model.defer="cpf">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="ex:******"
                            wire:model.defer="password">
                    </div>

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-success"> Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</div>