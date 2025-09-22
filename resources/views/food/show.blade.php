<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $food->name }} - Detalhes</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div class="container">
        <div class="show-card">
            <div class="show-header">
                <span class="show-icon">🍽️</span>
                <h1 class="show-title">{{ $food->name }}</h1>
                <p class="show-subtitle">Detalhes completos do item do cardápio</p>
            </div>

            <div class="show-content">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">ID do Item</div>
                        <div class="info-value">#{{ $food->id }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">Nome da Comida</div>
                        <div class="info-value large">{{ $food->name }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">Calorias</div>
                        <div class="info-value">
                            <span class="calories-badge">{{ $food->calories }} cal</span>
                        </div>
                    </div>
                </div>

                @if($food->description)
                <div class="description-section">
                    <h3 class="description-title">Descrição</h3>
                    <p class="description-text">{{ $food->description }}</p>
                </div>
                @endif

                <div class="metadata">
                    <h4 class="metadata-title">Informações do Sistema</h4>
                    <div class="metadata-grid">
                        <div class="metadata-item">
                            <span class="metadata-label">Criado em:</span>
                            <span class="metadata-value">{{ $food->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="metadata-item">
                            <span class="metadata-label">Última atualização:</span>
                            <span class="metadata-value">{{ $food->updated_at->format('d/m/Y H:i') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="show-actions">
                <a href="/food/{{ $food->id }}/edit" class="btn btn-edit">
                    ✏️ Editar Comida
                </a>
                
                <form action="/food/{{ $food->id }}" method="POST" style="display: inline;">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-delete" 
                            onclick="return confirm('Tem certeza que deseja deletar esta comida?')">
                        🗑️ Deletar Comida
                    </button>
                </form>
                
                <a href="/food" class="btn btn-secondary">
                    ↩️ Voltar à Lista
                </a>
            </div>
        </div>
    </div>
</body>
</html>