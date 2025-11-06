<div class="mt-5">
    <div class="card">
        <div class="card-body"> Lista de Produtos
            <div class="text-end">
                <a href="{{ route('produto.create') }}" class="btn btn-success">
                    Novo Produto
                </a>

                <input placeholder="pesquisar..." wire:model.live="search">
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
