<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="home-container">
        <div class="home-header">
            <h1 class="home-title">Sistema de Gerenciamento</h1>
            <p class="home-subtitle">Gerencie seu cardápio e categorias de forma simples e eficiente</p>
        </div>

        <div class="home-navigation">
            <a href="/food" class="nav-card">
                <span class="nav-icon">🍽️</span>
                <h3 class="nav-title">Gerenciar Comidas</h3>
                <p class="nav-description">Adicione, edite e organize os itens do seu cardápio digital</p>
            </a>

            <a href="/category" class="nav-card">
                <span class="nav-icon">📁</span>
                <h3 class="nav-title">Gerenciar Categorias</h3>
                <p class="nav-description">Organize suas comidas em categorias para melhor classificação</p>
            </a>
        </div>

        <div class="home-footer">
            <p>Desenvolvido com Laravel e muito ❤️</p>
        </div>
    </div>
</body>
</html>