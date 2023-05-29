<table border=1 style="margin: 10px;">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
        </tr>
    @endforeach
</table>

<form action="/min" method="get">
    <button style="margin: 5px;">Show Minimum of the Price</button>
</form>

<form action="/max" method="get">
    <button style="margin: 5px;">Show Maximum of the Price</button>
</form>

<form action="/avg" method="get">
    <button style="margin: 5px;">Show Average of the Price</button>
</form>