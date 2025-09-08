<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Categoria</title>    
    <link rel="stylesheet" href="{{ asset('css/category/index.css') }}">
</head>
<body>
    {{-- Formulário para criar uma nova comida --}}
    <form action="/category" method="POST">
        {{-- Token de segurança obrigatório no Laravel --}}
        @csrf 

        <div class="category-name ">
            <label for="name" class="label-custom">Nome</label>
            {{-- Campo de texto para digitar o nome da comida --}}
            <input type="text" name="name" id="name" placeholder="Digite o nome da Categoria">
        </div>

        {{-- Botão que envia os dados para o servidor --}}
        <button type="submit" class="btn btn-delete" >Criar</button>
    </form>
</body>
</html>
