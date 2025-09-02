<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar</title>
</head>
<body>
    {{-- Formulário para criar uma nova comida --}}
    <form action="/food" method="POST">
        {{-- Token de segurança obrigatório no Laravel --}}
        @csrf 

        <div>
            <label for="name">Nome</label>
            {{-- Campo de texto para digitar o nome da comida --}}
            <input type="text" name="name" id="name" placeholder="Digite o nome da comida">
        </div>

        <div>
            <label for="description">Descrição</label>
            {{-- Campo de texto longo para descrever a comida --}}
            <textarea name="description" id="description" placeholder="Digite a descrição da comida"></textarea>
        </div>

        <div>
            <label for="calories">Calorias</label>
            {{-- Campo para informar a quantidade de calorias --}}
            <input type="text" name="calories" id="calories" placeholder="Digite as Calorias">
        </div>

        {{-- Botão que envia os dados para o servidor --}}
        <button type="submit">Criar</button>
    </form>
</body>
</html>
