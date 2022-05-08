<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <a href="{{ route('create.product') }}" class="btn btn-primary m-3">add product</a>
        <a href="{{route('create.category')}}" class="btn btn-success m-3">add category</a>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>id</th>  <th>name </th> <th>price</th> <th>country</th> <th>image</th>
            </tr>

            @foreach(\App\Models\Product::all() as $product)
                <tr>
                     <td>{{$product->id}}</td> <td>{{$product->name}}</td> <td>{{$product->price}}</td>
                    <td>{{$product->country}}</td>
                    <td>
                        @foreach($product->images as $item)
                            <img src="{{asset('storage/'.$item->image)}}" width="100" alt="">
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>
</html>
