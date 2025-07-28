<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            </div>
        </div>
    </nav>

    <div class="container mt-5 main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Agenda de Contatos</h1>
            <a href="{{ route('contacts.create') }}" class="btn btn-primary">Adicionar Contato <i class="bi bi-plus-circle"></i></a>
        </div>

        <form action="{{ route('contacts.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <select name="search_field" class="form-select" style="max-width: 150px;">
                    <option value="name" {{ request('search_field') == 'name' ? 'selected' : '' }}>Nome</option>
                    <option value="email" {{ request('search_field') == 'email' ? 'selected' : '' }}>E-mail</option>
                    <option value="phone" {{ request('search_field') == 'phone' ? 'selected' : '' }}>Telefone</option>
                    <option value="category" {{ request('search_field') == 'category' ? 'selected' : '' }}>Categoria</option>
                    <option value="city_state" {{ request('search_field') == 'city_state' ? 'selected' : '' }}>Cidade/UF</option>
                </select>
                <input type="text" name="search_term" class="form-control" placeholder="Digite sua busca..." value="{{ request('search_term') }}">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
        </form>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Cidade/Estado</th>
                    <th>E-mail</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td class="text-center">{{ $contact->phone }}</td>
                        <td>{{ $contact->city_state }}</td>
                        <td>{{ $contact->email }}</td>
                        <td class="text-center">{{ $contact->category }}</td>
                        <td class="text-center">
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-info" title="Ver Detalhes"> Ver <i class="bi bi-eye"></i></a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-warning" title="Editar"> Editar <i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este contato?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Excluir"> Excluir <i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">Nenhum contato encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <footer class="mt-auto">
        @if ($contacts->hasPages())
            <div class="container py-3">
                <div class="d-flex justify-content-center">
                    {{ $contacts->links() }}
                </div>
            </div>
        @endif
    </footer>

    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false,
                position: 'top-end',
                toast: true
            });
        </script>
    @endif
</body>
</html>
