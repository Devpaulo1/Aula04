<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - Detalhes</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div class="container">
        <div class="show-card">
            <div class="show-header">
                <span class="show-icon">📁</span>
                <h1 class="show-title">{{ $category->name }}</h1>
                <p class="show-subtitle">Detalhes completos da categoria</p>
            </div>

            <div class="show-content">
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">ID da Categoria</div>
                        <div class="info-value">#{{ $category->id }}</div>
                    </div>

                    <div class="info-item">
                        <div class="info-label">Nome da Categoria</div>
                        <div class="info-value large">{{ $category->name }}</div>
                    </div>
                </div>

                <div class="metadata">
                    <h4 class="metadata-title">Informações do Sistema</h4>
                    <div class="metadata-grid">
                        <div class="metadata-item">
                            <span class="metadata-label">Criado em:</span>
                            <span class="metadata-value">{{ $category->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="metadata-item">
                            <span class="metadata-label">Última atualização:</span>
                            <span class="metadata-value">{{ $category->updated_at->format('d/m/Y H:i') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="show-actions">
                <a href="/category/{{ $category->id }}/edit" class="btn btn-edit">
                    ✏️ Editar Categoria
                </a>
                
                <form action="/category/{{ $category->id }}" method="POST" style="display: inline;">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-delete" 
                            onclick="return confirm('Tem certeza que deseja deletar esta categoria?')">
                        🗑️ Deletar Categoria
                    </button>
                </form>
                
                <a href="/category" class="btn btn-secondary">
                    ↩️ Voltar à Lista
                </a>
            </div>
        </div>
    </div>
</body>
</html>