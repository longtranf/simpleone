@extends ('template.main')
@section ('content')
    <div class="container">
        @include ('template.form-search')
        <div class="search-info">
            <h3>Category Name</h3><span class="info-order">Order By</span>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">First Item</a></li>
                    <li><a href="#">Second Item</a></li>
                    <li><a href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row" id="result-search">
        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="thumbnail"><a href="{{ URL::route('products.show', $product->id) }}"><img src="{!! URL::route('get_photo', $product->photo ) !!}"></a>
                    <div class="caption">
                        <h5><a href="{{ URL::route('products.show', $product->id) }}">{{ $product->product_name }}</a></h5>
                        <small>{!! $product->product_description !!}</small>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
        <nav>
            <ul class="pagination">
                <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li><a>1</a></li>
                <li><a>2</a></li>
                <li><a>3</a></li>
                <li><a>4</a></li>
                <li><a>5</a></li>
                <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
        </nav>
    </div>
@endsection