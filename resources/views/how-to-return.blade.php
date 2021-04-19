@extends('layouts.test')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
     </ul>
</div>
@endif
<div class="container">
    <br>
    <h2 class="nav-link"> การเคลมสินค้า [CLAIM PRODUCT]

        <a  href="{{route('claim.create')}}" class="btn btn-success " role="button" aria-pressed="true">
            เคลมสินค้าคลิกที่นี่ ! 
        </a>
        {{ csrf_field() }}
    </h2>
    <img src="how-to-return.png" width="300" height="590" class="d-block w-100" alt="...">
    <br>
    <div class="card">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <h5 class="nav-link"> การเคลมสินค้า </h5>
            </li>
            <li class="nav-item active">
                <h7 class="nav-link ml-3 text-dark">
                    1. เงื่อนไขการเคลมสินค้า ดังนี้ <br />
                    - ผู้ซื้อไม่ได้รับสินค้า <br />
                    - สินค้ามีตำหนิ / ใช้การไม่ได้ <br />
                    - ผู้ขายส่งสินค้าไม่ตรงกับข้อมูลจำเพาะที่ตกลงกันไว้ <br />

                    2. ถ่ายรูปสินค้าที่เสียหาย<br />
                    ถ่ายรูปสินค้าที่เสียหาย และอัพโหลดพร้อมทั้งกรอกรายละเอียดให้ครบถ้วน เพื่อให้ทางร้านรับข้อมูลไปพิจารณาในการเคลมสินค้า<br />

                    3. ไม่รับคืนเงินทุกกรณี<br />
                    การเคลมสินค้าทุกกรณี ทางร้านจะเปลี่ยนสินค้าชิ้นใหม่ให้เท่านั้น ไม่มีการคืนเงินทุกกรณี<br />

                    4. คืนสินค้าภายใน 7 วัน หลังได้รับสินค้า<br />
                    โดยสินค้าจะต้องอยู่ในสภาพเดิม มีป้ายราคา และ อยู่ในกล่องปิดมิดชิด<br />
                </h7>
            </li>
        </ul>
    </div>
</div>
<br />
<br />
<br />

</div>


<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
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