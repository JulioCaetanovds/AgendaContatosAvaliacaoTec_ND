<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .card, .table {
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
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
