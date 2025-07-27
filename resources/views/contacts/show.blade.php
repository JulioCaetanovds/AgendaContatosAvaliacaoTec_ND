<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato</title>
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
        <div class="card">
            <div class="card-header">
                <h1>Detalhes do Contato</h1>
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>Nome:</strong> {{ $contact->name }}</h5>
                <p class="card-text"><strong>E-mail:</strong> {{ $contact->email }}</p>
                <p class="card-text"><strong>Telefone:</strong> {{ $contact->phone }}</p>
                <p class="card-text"><strong>Cidade/Estado:</strong> {{ $contact->city_state }}</p>
                <p class="card-text"><strong>Categoria:</strong>
                    <span class="badge bg-secondary">{{ $contact->category }}</span>
                </p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('contacts.index') }}" class="btn btn-primary">Voltar para a Lista</a>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Editar este Contato</a>
            </div>
        </div>
    </div>
</body>
</html>
