@extends('layouts.app')

@section('content')

<br />
<a type="submit" name="submit" class="btn btn-danger" value="BACK" href="{{url('claim')}}" />BACK</a>

<br />
<div class="container">
    <div class="card">
        <h5 class="card-header">คำร้องขอของ คุณ {{$claim->name}}</h5>
        <div class="card-body">
            <section class="confirmation_part section_padding">
                <div class="order_boxes">
                    <div class="row">
                        <div class="col-lg-6 col-lx-4">
                            <div class="order-info">
                                <h4 class="text-center pb-4">ข้อมูลพื้นฐาน</h4>
                                <table class="table">
                                    <tr class="">
                                        <td>Full Name (ชื่อ-สกุล)</td>
                                        <td> : {{$claim->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email (อีเมล)</td>
                                        <td> : {{ $claim->email }} </td>
                                    </tr>

                                    <tr>
                                        <td>Phone No. (เบอร์โทรศัพท์)</td>
                                        <td> : {{ $claim->telephone}} ตัว</td>
                                    </tr>

                                    <tr class="">
                                        <td>Address (ที่อยู่)</td>
                                        <td> : {{$claim->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Detail (รายละเอียด)</td>
                                        <td> : {{$claim->product_name}} </td>
                                    </tr>
                                    <tr>
                                        <td>Detail (รายละเอียด)</td>
                                        <td> : {{$claim->detail}} </td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        <div class="col-lg-6 col-lx-4">
                            <div class="shipping-info">
                                <h4 class="text-center pb-4"> รูปภาพ </h4>
                                <table class="table">
                                    <tr class="">
                                        <img src="{{ URL::to('/') }}/images/{{ $claim->image }}" class="img-thumbnail" width="390" height="100" />
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection