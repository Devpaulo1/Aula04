<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Comidas</title>
    <link rel="stylesheet" href="{{ asset('css/food/index.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div>
                <h1>Gerenciar Cardápio</h1>
                <p>Gerencie os itens do seu cardápio digital</p>
            </div>
            <a href="/food/create" class="add-btn">Adicionar Comida</a>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stats-number">{{ count($allFood) }}</div>
            <div class="stats-label">Total de Itens no Cardápio</div>
        </div>

        <!-- Table -->
        <div class="table-container">
            @if(count($allFood) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Prato</th>
                        <th>Calorias</th>
                        <th>Categoria</th>
                        <th style="text-align: right;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allFood as $food)
                    <tr>
                        <td><span class="food-id">#{{ $food->id }}</span></td>
                        <td>
                            <div class="food-name">
                                <div class="food-avatar">🍽️</div>
                                <a href="/food/{{ $food->id }}">{{ $food->name }}</a>
                            </div>
                        </td>
                        <td>
                            <span class="calories-badge">{{ $food->calories }} cal</span>
                        </td>
                        <td>
                            <span class="calories-badge">{{ $food->category->name}}</span>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="/food/{{ $food->id }}/edit" class="btn btn-edit">
                                    ✏️ Editar
                                </a>
                                <form action="/food/{{ $food->id }}" method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-delete" 
                                            onclick="return confirm('Tem certeza que deseja deletar este item?')">
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
                <h3 class="empty-title">Nenhuma comida cadastrada</h3>
                <p class="empty-description">Comece adicionando o primeiro item ao seu cardápio.</p>
                <a href="/food/create" class="add-btn">Adicionar Primeira Comida</a>
            </div>
            @endif
        </div>
    </div>
</body>
</html>