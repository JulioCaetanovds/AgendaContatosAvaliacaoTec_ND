<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Contato</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand position-lg-absolute start-50 translate-middle-x" href="{{ route('home') }}">Sistema ND</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Adicionar Novo Contato</h1>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="city_state" class="form-label">Cidade/Estado</label>
                <input type="text" class="form-control" id="city_state" name="city_state" value="{{ old('city_state') }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="" disabled selected>Selecione uma categoria</option>
                    <option value="Aluno">Aluno</option>
                    <option value="Responsável">Responsável</option>
                    <option value="Professor">Professor</option>
                    <option value="Funcionário">Funcionário</option>
                    <option value="Gestor">Gestor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
