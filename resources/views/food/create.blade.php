<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/food" method="POST">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Digite o nome da comida">>
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" placeholder="Digite a descrição da comida"></textarea>
        </div>
        <div>
            <label for="calories">Calorias</label>
            <input type="text" name="calories" id="calories" placeholder="Digite as Calorias">
        </div>
        <button type="submit">Criar</button>
    </form>
</body>
</html>




