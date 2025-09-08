<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Comida</title>    
    <link rel="stylesheet" href="{{ asset('css/category/index.css') }}">
</head>
<body>
    {{-- Formulário que envia os dados para atualizar a comida --}}
    <form action="/category/{{ $category->id }}" method="POST">
        {{-- Token de segurança (obrigatório em formulários no Laravel) --}}
        @csrf 
        
        {{-- Indica que essa requisição será do tipo PUT (atualização) --}}
        @method('PUT')

        <div>
            <label for="name">Nome</label>
            {{-- Campo já vem preenchido com o nome da comida --}}
            <input type="text" name="name" id="name" value="{{ $category->name }}">
        </div>
        {{-- Botão para enviar o formulário --}}
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
