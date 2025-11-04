<div class="mt-5">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <a href="{{ route('login') }}" class="btn btn-success">
                Ir para o Login
            </a>
    @endif

    <div class="card">
        <div class="card-body"> Cadastro de Usuários

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo..."
                        wire:model="name">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Exemplo: xxx@gmail.com"
                        wire:model="email">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha..."
                        wire:model="password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit">Cadastrar</button>
                <p><a class="link-opacity-100" href="{{route('login')}}">Já possuo cadastro</a></p>
            </form>
        </div>
    </div>
</div>
