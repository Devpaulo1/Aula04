<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Comida</title>
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">Criar Nova Comida</h1>
            <p class="form-subtitle">Adicione um novo item ao seu cardápio</p>
        </div>

        {{-- Formulário para criar uma nova comida --}}
        <form action="/food" method="POST">
            {{-- Token de segurança obrigatório no Laravel --}}
            @csrf 

            <div class="form-group">
                <label for="name" class="label-custom">Nome da Comida</label>
                {{-- Campo de texto para digitar o nome da comida --}}
                <input type="text" name="name" id="name" class="form-input" placeholder="Digite o nome da comida" required>
            </div>

            <div class="form-group">
                <label for="description" class="label-custom">Descrição</label>
                {{-- Campo de texto longo para descrever a comida --}}
                <textarea name="description" id="description" class="form-textarea" placeholder="Digite a descrição da comida" required></textarea>
            </div>

            <div class="form-group">
                <label for="calories" class="label-custom">Calorias</label>
                {{-- Campo para informar a quantidade de calorias --}}
                <input type="number" name="calories" id="calories" class="form-input" placeholder="Digite as calorias (ex: 250)" required>
            </div>

            <div class="form-actions">
                {{-- Botão que envia os dados para o servidor --}}
                <button type="submit" class="btn-submit">🍽️ Criar Comida</button>
                <a href="/food" class="btn-secondary">↩️ Voltar à Lista</a>
            </div>
        </form>
    </div>
</body>
</html>
