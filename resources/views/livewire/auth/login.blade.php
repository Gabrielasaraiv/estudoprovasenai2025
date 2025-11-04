<div class="mt-5">
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card">
        <div class="card-body"> Login

            <form wire:submit.prevent="login">
                
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

                <button type="submit">Entrar</button>
                <p><a class="link-opacity-100" href="{{route('user.create')}}">Não possuo cadastro</a></p>
            </form>
        </div>
    </div>
</div>
