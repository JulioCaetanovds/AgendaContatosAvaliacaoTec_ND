<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        /* Define a fonte padrão para o corpo */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Estiliza os títulos e textos para um visual mais moderno */
        .card, .table {
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        /* Estiliza a navbar para um visual mais moderno */
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
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('contacts.index') }}">Agenda</a></li>
                </ul>
                {{-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul> --}}
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Agenda de Contatos</h1>
            <a href="{{ route('contacts.create') }}" class="btn btn-primary"> Adicionar Contato <i class="bi bi-plus-circle"></i></a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Cidade/Estado</th>
                    <th>E-mail</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->city_state }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->category }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-info" title="Ver Detalhes"> Ver <i class="bi bi-eye"></i></a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning" title="Editar"> Editar <i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este contato?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Excluir"> Excluir <i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
