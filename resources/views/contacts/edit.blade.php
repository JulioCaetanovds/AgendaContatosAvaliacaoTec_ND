<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Sistema ND</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Editar Contato: {{ $contact->name }}</h1>
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

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf @method('PUT') <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="city_state" class="form-label">Cidade/Estado</label>
                <input type="text" class="form-control" id="city_state" name="city_state" value="{{ old('city_state', $contact->city_state) }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select class="form-select" id="category" name="category" required>
                    <option value="" disabled>Selecione uma categoria</option>
                    <option value="Aluno" @selected(old('category', $contact->category) == 'Aluno')>Aluno</option>
                    <option value="Responsável" @selected(old('category', $contact->category) == 'Responsável')>Responsável</option>
                    <option value="Professor" @selected(old('category', $contact->category) == 'Professor')>Professor</option>
                    <option value="Funcionário" @selected(old('category', $contact->category) == 'Funcionário')>Funcionário</option>
                    <option value="Gestor" @selected(old('category', $contact->category) == 'Gestor')>Gestor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
