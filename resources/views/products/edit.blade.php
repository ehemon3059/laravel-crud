<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class='mt-3 text-center'>Edit Product</h1>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form method='post' action="{{route('product.update' , ['updateProduct' => $product])}}">
            @csrf  
            @method('put')

            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Quantity</label>
                <input type="text" class="form-control" name="qty"  value="{{$product->qty}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" name="price"  value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <input type="text" class="form-control" name="description"  value="{{$product->description}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>