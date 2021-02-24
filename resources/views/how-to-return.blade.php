@extends('layouts.test')

@section('content')

<div class="container">
    <br>
    <img src="how-to-return.png" width="300" height="590" class="d-block w-100" alt="...">
    <br>
    <div class="card">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <h5 class="nav-link"> การคืนสินค้า </h5>
            </li>
            <li class="nav-item active">
                <h7 class="nav-link ml-3 text-danger">** หมายเหตุ แจ้งการคืนสินค้าภายใน 7 วันหลังได้รับสินค้า</h7>
                <h7 class="nav-link ml-3 text-dark">
                    1 การยื่นคำร้องขอคืนสินค้า/คืนเงิน <br />
                    ผู้ซื้อสามารถยื่นคำร้องขอคืนสินค้าที่ซื้อ (“สินค้า”) และ/หรือคืนเงินก่อนวันหมดเขตระยะเวลา ดังที่ระบุไว้ในเงื่อนไขการให้บริการโดยเป็นไปตามข้อกำหนด <br />
                    และเงื่อนไขการให้บริการ
                    <br />
                    <br />
                    2 การยื่นคำร้องขอคืนสินค้า<br />
                    ผู้ซื้อสามารถยื่นคำร้องขอคืนเงินและ/หรือคืนสินค้าในสถานการณ์ต่อไปนี้เท่านั้น<br />
                    > ผู้ซื้อไม่ได้รับสินค้า<br />
                    > สินค้ามีตำหนิ ใช้การไม่ได้<br />
                    > ผู้ขายส่งสินค้าไม่ตรงกับข้อมูลจำเพาะที่ตกลงกันไว้ <br />
                    <br />
                    ผู้ซื้อจะต้องส่งคำร้องของผู้ซื้อผ่านทาง Facebook ที่เพจ :Over You99 จะตรวจสอบคำร้องของผู้ซื้อแต่ละคนแบบเป็นกรณีๆ ไป
                </h7>
            </li>
        </ul>
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