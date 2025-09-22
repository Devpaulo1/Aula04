<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categoria</title>    
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">Criar Nova Categoria</h1>
            <p class="form-subtitle">Adicione uma nova categoria para organizar seus itens</p>
        </div>

        {{-- Formulário para criar uma nova categoria --}}
        <form action="/category" method="POST">
            {{-- Token de segurança obrigatório no Laravel --}}
            @csrf 

            <div class="form-group">
                <label for="name" class="label-custom">Nome da Categoria</label>
                {{-- Campo de texto para digitar o nome da categoria --}}
                <input type="text" name="name" id="name" class="form-input" placeholder="Digite o nome da categoria" required>
            </div>

            <div class="form-actions">
                {{-- Botão que envia os dados para o servidor --}}
                <button type="submit" class="btn-submit">📁 Criar Categoria</button>
                <a href="/category" class="btn-secondary">↩️ Voltar à Lista</a>
            </div>
        </form>
    </div>
</body>
</html>
