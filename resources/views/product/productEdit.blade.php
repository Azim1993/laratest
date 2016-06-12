@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Product</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{!! url('products') !!}">Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        {!! Form::model($product,array('url' => array('updateProduct',$product->id),'method' => 'patch')) !!}
                        @include('product.productForm',['SubmitButton' => 'Edit Product'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customJs')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btn').click(function(){
                $.ajax({
                    url: 'updateProduct',
                    type: "post",
                    data: {
                        'ProductName':$('input[name=ProductName]').val(),
                        'ProductStock':$('input[name=ProductStock]').val(),
                        'ProductPrice':$('input[name=ProductPrice]').val(),
                        '_token': $('input[name=_token]').val()
                    },
                    dataType    : 'json',
                    encode          : true
                });
            });
        });
    </script>
@endsection
