@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Products</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            @if(Auth::check())
                            <li><a href="{!! url('createProduct') !!}">Add Product</a></li>
                            @else
                            <code>You should login to add and edit product</code>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <?php $totalPrice = 0 ?>
                            <div class="row">
                                <div class="col-sm-6"><h4 class="text-danger">Product Name</h4></div>
                                <div class="col-sm-2"><h4 class="text-danger">stock</h4></div>
                                <div class="col-sm-2"><h4 class="text-danger">price</h4></div>
                                <div class="col-sm-2"><h4 class="text-danger">Total</h4></div>
                            </div>
                        @foreach($products as $product)
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4><a href="{!! url('product/'.$product->id) !!}"> {!! $product->ProductName !!}</a></h4>
                                </div>
                                <div class="col-sm-2">{!! $product->ProductStock !!}</div>
                                <div class="col-sm-2">{!! $product->ProductPrice !!}</div>
                                <div class="col-sm-2">{!! $product->ProductStock * $product->ProductPrice !!}</div>
                                <?php $totalPrice = $totalPrice + $product->ProductStock * $product->ProductPrice  ?>
                            </div>
                        @endforeach <hr>
                            <div class="row">
                                <div class="col-sm-10"><strong>Total</strong></div>
                                <div class="col-sm-2"> {!! $totalPrice !!}</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
@endsection
