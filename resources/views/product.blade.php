@extends('layouts.app')

@section('content')
<div align="right">

<a href="{{route('Product.create')}}" class="btn btn-success" role="button" aria-pressed="true">Add Product</a>
@csrf
</div>
<br />
<br />
@if($massage = Session::get('succsss'))

<div class ="alert alert-success">
    <p>{{$massage}}</p>
</div>
@endif
<table class="table table-bordered table-striped col-md-11   ml-5">
    <tr>
        <th width="6%">Product id</th>
        <th width="10%">Image</th>
        <th width="13%">Product Name</th>
        <th width="25%">Product Delail</th>
        <th width="10%">Product Price</th>
        <th width="10%">Protype Id</th>
        <th width="6%">Product Num</th>

    </tr>
    @foreach($data as $row)
    <tr>
        <td>{{ $row->product_id }}</td>
        <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
        <td>{{ $row->product_name }}</td>
        <td>{{ $row->product_delail }}</td>
        <td>{{ $row->product_price }}</td>
        <td>{{ $row->protype_id }}</td>
        <td>{{ $row->product_num }}</td>
        <td>

        </td>
    </tr>
    @endforeach
</table>
{!! $data->links() !!}
@endsection