@extends('layouts.app')

@section('content')

<div class="container">
    <br />
    <br />
    <h3> สรุปยอดขายค้าสินค้า </h3>
    <hr>
    <table class="table table-hover table-bordered" id="sampleTable">
        <thead>
            <tr>
                <th class="text-center"> สินค้า  </th>
                <th class="text-center"> ประเภท </th>
                <th class="text-center"> จำนวน </th>
                <th class="text-center"> ราคา </th>
                <th class="text-center"> DATE </th>
            </tr>
        </thead>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <h5> รวม :  </h5>
    <div class="form-row justify-content-center">
    </div>
</div>
@endsection