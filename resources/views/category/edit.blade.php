<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>    
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">Editar Categoria</h1>
            <p class="form-subtitle">Atualize as informações da categoria "{{ $category->name }}"</p>
        </div>

        {{-- Formulário que envia os dados para atualizar a categoria --}}
        <form action="/category/{{ $category->id }}" method="POST">
            {{-- Token de segurança (obrigatório em formulários no Laravel) --}}
            @csrf 
            
            {{-- Indica que essa requisição será do tipo PUT (atualização) --}}
            @method('PUT')

            <div class="form-group">
                <label for="name" class="label-custom">Nome da Categoria</label>
                {{-- Campo já vem preenchido com o nome da categoria --}}
                <input type="text" name="name" id="name" class="form-input" value="{{ $category->name }}" required>
            </div>

            <div class="form-actions">
                {{-- Botão para enviar o formulário --}}
                <button type="submit" class="btn-submit">💾 Salvar Alterações</button>
                <a href="/category" class="btn-secondary">↩️ Voltar à Lista</a>
            </div>
        </form>
    </div>
</body>
</html>
