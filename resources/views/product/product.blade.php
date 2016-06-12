@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">product</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            @if(Auth::check())
                            <li><a href="{!! url('createProduct') !!}">Add Product</a></li>
                            @else
                            <li><a href="{!! url('products') !!}">Products</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <h4>{!! $product->ProductName !!}</h4>
                        <p>{!! $product->ProductStock !!}</p>
                        <p>{!! $product->ProductPrice !!}</p>
                        @if(Auth::check())
                        <a href="{!! url('product/'.$product->id.'/edit') !!}" class="btn btn-primary">Edit Product</a>
                        <a href="{!! url('product/'.$product->id.'/delete') !!}" class="btn btn-danger">delete Product</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
@endsection
