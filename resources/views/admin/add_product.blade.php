@extends ('template.main')
@section ('content')

    <div class="container" id="user-info-container">
        <div class="col-md-6 col-md-offset-3" id="add-category">
            <form class="bootstrap-form-with-validation" role="form" method="POST" action="{{ URL::route('admin.products.store') }}">
            {{ csrf_field() }}
            @if (isset($message))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ $message }}</li>
                    </ul>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <h2 class="text-center">Add Product</h2>
                <div class="form-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <input class="form-control" type="text" name="product_name" >
                </div>
                <div class="form-group">
                    <label class="control-label" for="category_name">Category Name</label>
                    <input class="form-control" type="text" name="category_name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="color">Color </label>
                    <input class="form-control" type="text" name="color">
                </div>
                <div class="form-group">
                    <label class="control-label" for="price">Price </label>
                    <input class="form-control" type="text" name="price">
                </div>
                <div class="form-group">
                    <label class="control-label" for="quantity">Quantity </label>
                    <input class="form-control" type="text" name="quantity">
                </div>
                <div class="form-group">
                    <label class="control-label" for="supplier_name">Supplier </label>
                    <input class="form-control" type="text" name="supplier_name">
                </div>
                <div class="form-group">
                    <label class="control-label" for="product_description">Description </label>
                    <textarea class="form-control" name="product_description"></textarea>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <label class="control-label" for="product_image">Product Image</label>
                    <input type="file" name="product_image">
                </div>
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary" type="submit">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection