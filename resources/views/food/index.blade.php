{{-- Título da página --}}
<h1>Lista de Comidas</h1>

{{-- Botão/link para criar uma nova comida --}}
<div style="display:flex; align-items:center;justify-content: end">
    <a href="/food/create">Criar uma comida</a>
</div>

{{-- Tabela que mostra todas as comidas cadastradas --}}
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Calorias</th>
        <th>Editar</th>
        <th>Visualizar</th>        
        <th>Excluir</th>
    </tr>

    {{-- Loop que percorre todas as comidas vindas do Controller --}}
    @foreach($allFood as $food)
        <tr>
            {{-- Mostra o ID da comida --}}
            <td>{{ $food->id }}</td>

            {{-- Mostra o nome da comida --}}
            <td>{{ $food->name }}</td>

            {{-- Mostra as calorias --}}
            <td>{{ $food->calories }}</td>

            {{-- Link para editar a comida selecionada --}}
            <td><a href="/food/{{ $food->id }}/edit">Editar</a></td>

            {{-- Link para visualizar (ainda não implementado) --}}
            <td><a href="#">Visualizar</a></td>        

            {{-- Link para excluir (vamos trocar por formulário depois) --}}
            <td><form action ="/food/{{$food->id}}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit">Excluir</button>
            </td>
        </tr>
    @endforeach
</table>
