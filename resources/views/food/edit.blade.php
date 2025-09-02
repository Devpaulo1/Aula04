<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Comida</title>
</head>
<body>
    {{-- Formulário que envia os dados para atualizar a comida --}}
    <form action="/food/{{ $food->id }}" method="POST">
        {{-- Token de segurança (obrigatório em formulários no Laravel) --}}
        @csrf 
        
        {{-- Indica que essa requisição será do tipo PUT (atualização) --}}
        @method('PUT')

        <div>
            <label for="name">Nome</label>
            {{-- Campo já vem preenchido com o nome da comida --}}
            <input type="text" name="name" id="name" value="{{ $food->name }}">
        </div>

        <div>
            <label for="description">Descrição</label>
            {{-- Textarea já vem com a descrição atual --}}
            <textarea name="description" id="description">{{ $food->description }}</textarea>
        </div>

        <div>
            <label for="calories">Calorias</label>
            {{-- Campo já vem preenchido com as calorias atuais --}}
            <input type="text" name="calories" id="calories" value="{{ $food->calories }}">
        </div>

        {{-- Botão para enviar o formulário --}}
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
