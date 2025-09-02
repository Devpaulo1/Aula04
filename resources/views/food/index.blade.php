<table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Calorias</th>
    </tr>
@foreach($allFood as $food)
    <tr>
        <td>{{$food->id}}</td>
        <td>{{$food->name}}</td>
        <td>{{$food->calories}}</td>
    </tr>
@endforeach
</table>