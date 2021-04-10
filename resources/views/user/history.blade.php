@extends('layouts.test')

@section('content')
<br>
<br>
<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/shop')}}" class="text-success"> Shop </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span class="text-dark">การซื้อของฉัน</span>
</h4>
<br>


<div class="product-section container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>

            <tr>
                <th style="width:30%">สินค้า</th>
                <th style="width:10%">ราคา</th>
                <th style="width:20%">จำนวน</th>
                <th style="width:20%">สถานะการจัดส่ง</th>
                <th style="width:10%"></th>
            </tr>
        </thead>

        <tbody>
           
        <tbody>
            @if($user )
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-9">
                            <img src="{{asset($user->product_img )}}" style="width: 70px; height:70px;" /> <br>
                            <h6 class="nomargin"> {{$user->product_name}}</h6>
                            <h6 class="nomargin"> รายละเอียด : {{$user->product_detail}} </h6>
                        </div>
                    </div>
                </td>

                <td data-th="Price">
                    {{$user->price}} บาท
                </td>

                <td data-th="Quantity">
                    <div class="form-group col-md-6">
                        {{$user->quantity}} ตัว
                    </div>
                </td>

                <td class="actions" data-th="">
                    @if($user->status=='pending')
                    <span class="badge badge-primary">{{$user->status}} (รอ)</span>
                    @elseif($user->status=='processing')
                    <span class="badge badge-warning">{{$user->status}} (กำลังดำเนินการ) </span>
                    @elseif($user->status=='completed')
                    <span class="badge badge-success">{{$user->status}} (สำเร็จ)</span>
                    @else
                    <span class="badge badge-danger">{{$user->status}} (ยกเลิก)</span>
                    @endif

                </td>

                <td class="actions" data-th="">
                    <div class="form-group col-md-6">
                        <button type="button" class="btn btn-danger"><a href="{{ route('shop.show',$user->id )}}" class="text-dark">ซื้ออีกครั้ง</a></button>
                    </div>

                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- chatbot-->
<script>
    ! function(e, t, a) {
        var c = e.head || e.getElementsByTagName("head")[0],
            n = e.createElement("script");
        n.async = !0, n.defer = !0, n.type = "text/javascript", n.src = t + "/static/js/chat_widget.js?config=" + JSON.stringify(a), c.appendChild(n)
    }(document, "https://app.engati.com", {
        bot_key: "00208c9fb9574ea5",
        welcome_msg: true,
        branding_key: "default",
        server: "https://app.engati.com",
        e: "p"
    });
</script>
<!-- endchatbot -->


<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>
@endsection