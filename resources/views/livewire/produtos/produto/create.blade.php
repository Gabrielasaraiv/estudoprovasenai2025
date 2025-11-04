<div class="mt-5">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="{{ route('produtos.list') }}" class="btn btn-success">
                Ir para a lista de produtos
            </a>
    @endif

    <div class="card">
        <div class="card-body"> Cadastro de Produtos

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label fw-semibold">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome do produto..."
                        wire:model="nome">
                    @error('nome')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" rows="3" wire:model="descricao">
                    @error('descricao')
<small class="text-danger">{{ $message }}</small>
@enderror
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="preco" class="form-label fw-semibold">Preço</label>
                    <input type="text" class="form-control" id="preco" placeholder="Digite o preço do produto"
                        wire:model="preco">
                    @error('preco')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tentacles">Quantidade em estoque</label>
                    <input type="number" id="quantidade" name="quantidade" min="-1000" max="1000"
                        wire:model="quantidade">
                    @error('quantidade')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tentacles">Quantidade mínima</label>
                    <input type="number" id="quantidade_minima" name="quantidade_minima" min="-1000" max="1000"
                        wire:model="quantidade_minima">
                    @error('quantidade')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit">Cadastrar Produto</button>
                <a class="btn btn-secondary" href="{{ route('produtos.list') }}">Cancelar</a></p>
            </form>
        </div>
    </div>
</div>
