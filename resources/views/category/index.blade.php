<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categoria</title>
    <link rel="stylesheet" href="{{ asset('css/category/index.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div>
                <h1>Gerenciar Categoria</h1>
            </div>
            <a href="/category/create" class="add-btn">Adicionar Categoria</a>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stats-number">{{ count($allCategory) }}</div>
            <div class="stats-label">Total de Categoria</div>
        </div>

        <!-- Table -->
        <div class="table-container">
            @if(count($allCategory) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Categoria</th>
                        <th style="text-align: right;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allCategory as $category)
                    <tr>
                        <td>
                            <span class="category-id">#{{ $category->id }}</span>
                        </td>
                        <td>
                            <div class="category-name">
                                <a href="/category/{{ $category->id }}">{{ $category->name }}</a>
                            </div>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="/category/{{ $category->id }}/edit" class="btn btn-edit">
                                    ✏️ Editar
                                </a>
                                <form action="/category/{{ $category->id }}" method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-delete" 
                                            onclick="return confirm('Tem certeza que deseja deletar esta categoria?')">
                                        🗑️ Deletar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-state">
                <div class="empty-icon">🍽️</div>
                <h3 class="empty-title">Nenhuma categoria cadastrada</h3>
                <p class="empty-description">Comece adicionando o primeira categoria.</p>
                <a href="/category/create" class="add-btn">Adicionar Primeira  caterogia</a>
            </div>
            @endif
        </div>
    </div>
</body>
</html>