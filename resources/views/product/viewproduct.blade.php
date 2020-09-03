@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('product.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{asset($value->product_img )}}" style="width: 150px;" class="img-thumbnail"/>
 <h3>First Name - {{ $product->product_name }} </h3>
 <h3>Last Name - {{ $product->product_price }}</h3>
 <h3>Last Name - {{ $product->product_detail }}</h3>
 <h3>Last Name - {{ $product->product_num }}</h3>
</div>
@endsection
