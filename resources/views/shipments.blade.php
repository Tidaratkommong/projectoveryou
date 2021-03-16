@extends('layouts.test')

@section('content')

<div class="container">
  <br />
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <h1 class="nav-link"> ตรวจสอบเลขพัสดุ </h1>
    </li>
    <h6 class="nav-link text-danger"> ** สามารถค้นหาเลขพัสดุโดยค้นหาจากชื่อผู้ใช้งาน เช่น Kanjana loetchaloenyong**</h6>
  </ul>

  <!-- Search form -->
  <form action="/search/shipment" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group md-form form-sm form-2 pl-0">
      <input class="form-control my-0 py-1 red-border" type="text" class="form-control" placeholder="ตรวจสอบเลขพัสดุ" name="search" style=" height:3rem;">
      <span class="input-group-append">
        <button class="input-group-text red lighten-3" type="submit" style="background-color: #FA8072; height:3rem;">
          <i class="fas fa-search text-grey" aria-hidden="true"></i>
        </button>
      </span>
    </div>
  </form>
  <!-- End Search form -->

  <br />
  <table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">
          <h5>เลขพัสดุ</h5>
        </th>
        <th scope="col">
          <h5>วันที่สั่งซื้อ</h5>
        </th>
        <th scope="col">
          <h5>ราคารวม</h5>
        </th>
        <th scope="col">
          <h5>สถานะการสั่งซื้อ</h5>
        </th>
        <th scope="col">
          <h5>การชำระเงิน</h5>
        </th>
      </tr>
    </thead>
    @foreach( $orders as $value)
    <tbody>
      <tr class="success">
        <td>{{ $value->order_number}}</td>
        <td>{{$value->created_at->format('D d M, Y')}} at {{$value->created_at->format('g : i a')}}</td>
        <td> ฿ {{number_format($value->grand_total)}}</td>
        <td class="text-center">
          @if($value->status=='pending')
          <span class="badge badge-primary">{{$value->status}}</span>
          @elseif($value->status=='processing')
          <span class="badge badge-warning">{{$value->status}}</span>
          @elseif($value->status=='completed')
          <span class="badge badge-success">{{$value->status}}</span>
          @else
          <span class="badge badge-danger">{{$value->status}}</span>
          @endif
        </td>
        <td class="text-center">
          @if ($value->payment_method =='cash on delivery')
          <span class="badge badge-warning">{{$value->payment_method}}</span>
          @elseif($value->payment_method =='paypal')
          <span class="badge badge-success">{{$value->payment_method}}</span>
          @endif
        </td>
      </tr>
    </tbody>
    @endforeach



  </table>
  <br />
  <br />
  <br />
  <br />
  <br />
  
  <h5 class="nav-link text-danger"> ** ข้อมูลการจัดส่งสินค้า
    <h6 class="nav-link ml-3 text-danger"> 1. สินค้าปกติจะส่งถึงมือคุณภายใน 2-5 วันทำการ</h6>
  </h5>
</div>

<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
  <li class="nav-item">
    <a class="btn btn-link" href="#"></a>
  </li>
  <br />
  <br />

</ul>


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




@endsection