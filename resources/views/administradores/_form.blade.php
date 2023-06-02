<div class="container-fluid pt-4 px-4">
    <h1>{{ isset($administrador) ? 'Editar Administrador' : 'Criar Administrador' }}</h1>
    <hr>
    <form action="{{ isset($administrador) ? route('administradores.update', $administrador->id) : route('administradores.store') }}" method="POST">
        @csrf
        @if (isset($administrador))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control border-white" id="nome" name="nome" value="{{ isset($administrador) ? $administrador->nome : '' }}">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control border-white" id="telefone" name="telefone" value="{{ isset($administrador) ? $administrador->telefone : '' }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control border-white" id="email" name="email" value="{{ isset($administrador) ? $administrador->email : '' }}">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control border-white" id="senha" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($administrador) ? 'Atualizar' : 'Salvar' }}</button>
    </form>
</div>
