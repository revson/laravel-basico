<h1>Listagem de Produtos</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
    </tr>

    @endforeach

</table>