@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Add Product</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{!! url('createProduct') !!}">Add Product</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        @foreach($products as $product)
                           <h4><a href="{!! url('product/'.$product->id) !!}"> {!! $product->ProductName !!}</a></h4>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
@endsection
