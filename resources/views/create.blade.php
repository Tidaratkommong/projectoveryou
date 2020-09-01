@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
       <a href="#" class="btn btn-default">Back</a>
</div>

<form method="post" action="#" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="col-md-4 text-right">Product ID</label>
        <div class="col-md-8">
            <input type="text" name="product_id" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Enter Last Name</label>
        <div class="col-md-8">
            <input type="text" name="product_name" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Product ID</label>
        <div class="col-md-8">
            <input type="text" name="product_delail" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Product ID</label>
        <div class="col-md-8">
            <input type="text" name="product_price" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Product ID</label>
        <div class="col-md-8">
            <input type="text" name="protype_id" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Product ID</label>
        <div class="col-md-8">
            <input type="text" name="product_num" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />
    <div class="form-group">
        <label class="col-md-4 text-right">Select Profile Image</label>
        <div class="col-md-8">
            <input type="file" name="product_img" />
        </div>
    </div>
    <br /><br /><br />
    <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
    </div>

</form>

@endsection

