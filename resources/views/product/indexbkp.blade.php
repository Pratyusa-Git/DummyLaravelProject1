<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <h1>Products List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th width="300px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($products) && $products->count())
                @foreach($products as $key => $product)
                    <tr>
                        <td><img src="{{ asset('images/'.$product->image) }}"></td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <a href="{{route('products.show',['id' => $product->id])}}"><button class="btn btn-primary">View</button></a>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
         
    {!! $products->links() !!}
</div>
     
</body>
</html>