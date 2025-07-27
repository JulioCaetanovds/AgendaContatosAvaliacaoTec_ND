<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Projeto Notre Dame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema ND</a>
            <div class="collapse navbar-collapse">
                <{{-- ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul> --}}
            </div>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Bem-vindo ao Sistema de Avaliação</h1>
                <p class="fs-4">Este é o projeto de avaliação técnica para a vaga de Desenvolvedor de Sistemas II.</p>
                <a href="{{ route('contacts.index') }}" class="btn btn-primary btn-lg mt-3">Acessar Agenda de Contatos</a>
            </div>
        </div>
    </div>
</body>
</html>
