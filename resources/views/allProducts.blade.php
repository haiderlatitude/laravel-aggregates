<table border=1>
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