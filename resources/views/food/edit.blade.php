<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comida</title>
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-title">Editar Comida</h1>
            <p class="form-subtitle">Atualize as informações do item "{{ $food->name }}"</p>
        </div>

        {{-- Formulário que envia os dados para atualizar a comida --}}
        <form action="/food/{{ $food->id }}" method="POST">
            {{-- Token de segurança (obrigatório em formulários no Laravel) --}}
            @csrf 
            
            {{-- Indica que essa requisição será do tipo PUT (atualização) --}}
            @method('PUT')

            <div class="form-group">
                <label for="name" class="label-custom">Nome da Comida</label>
                {{-- Campo já vem preenchido com o nome da comida --}}
                <input type="text" name="name" id="name" class="form-input" value="{{ $food->name }}" required>
            </div>

            <div class="form-group">
                <label for="description" class="label-custom">Descrição</label>
                {{-- Textarea já vem com a descrição atual --}}
                <textarea name="description" id="description" class="form-textarea" required>{{ $food->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="calories" class="label-custom">Calorias</label>
                {{-- Campo já vem preenchido com as calorias atuais --}}
                <input type="number" name="calories" id="calories" class="form-input" value="{{ $food->calories }}" required>
            </div>

            <div class="form-group">
                <label for="category_id" class="label-custom">Categoria</label>
                {{-- Select com lista de categorias disponíveis --}}
                <select name="category_id" id="category_id" class="form-input" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                                {{ $food->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-actions">
                {{-- Botão para enviar o formulário --}}
                <button type="submit" class="btn-submit">💾 Salvar Alterações</button>
                <a href="/food" class="btn-secondary">↩️ Voltar à Lista</a>
            </div>
        </form>
    </div>
</body>
</html>
