<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Sistema ND</a>
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
            <a href="{{ route('contacts.create') }}" class="btn btn-primary">Adicionar Contato</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-hover">
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
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este contato?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
