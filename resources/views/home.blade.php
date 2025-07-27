<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Projeto Notre Dame</title>
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
