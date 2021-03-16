@extends('layouts.test')

@section('content')

<div class="container">
    <br>
    <img src="how-to-order.png" width="300" height="590" class="d-block w-100" alt="...">
    <br>
    <div class="card">
        <ul class="navbar-nav mr-auto ">
            <br />
            <li class="nav-item active">
                <h5 class="nav-link ml-2 text-black"> การซื้อสินค้า </h5>
            </li>
            <li class="nav-item active">
                <h6 class="nav-link ml-3"> 1. เลือกสินค้าที่ต้องการ </h6>
                <h6 class="nav-link ml-3"> 2. เพิ่มสินค้าลงรถเข็นสินค้า </h6>
                <h6 class="nav-link ml-3"> 3. ตรวจสอบรายการสินค้า
                    <h7 class="nav-link ml-3">** หลังจากคลิกปุ่ม “เพิ่มไปยังรถเข็น” ผู้ซื้อต้องกรอกจำนวนสินค้าที่ต้องการ และ ต้องเลือกรายละเอียดสินค้าเพิ่มเติม เช่น เลือกสี, ขนาด,
                        จากนั้นคลิกปุ่ม "ดำเนินการชำระเงิน" คุณจะไปสู่หน้า ข้อมูลการจัดส่ง
                    </h7>
                </h6>
                <h6 class="nav-link ml-3"> 4. ระบุที่อยู่ และรูปแบบการชำระเงิน
                    <h6 class="nav-link ml-5">4.1 กรุณาระบุ ชื่อ-นามสกุล / ที่อยู่ / เบอร์โทรศัพท์ ให้ถูกต้องครบถ้วน เพื่อป้องกันไม่ให้เกิดปัญหาในการจัดส่ง และหากเกิดปัญหาเราจะได้สามารถติดต่อท่านได้อย่างรวดเร็ว </h6>
                    <h6 class="nav-link ml-5">4.2 เลือกรูปแบบการชำระเงิน คือ ชำระเงินปลายทาง และ โอน/ชำระผ่านบัญชีธนาคาร</h6>
                    <img src="bank.png" width="250" height="300"  class="d-block w-100" alt="...">
                </h6>
                <h6 class="nav-link ml-3"> 5.การชำระเงิน
                    <h6 class="nav-link ml-5"> วิธีที่ 1. เลือกชำระแบบเก็บเงินปลายทาง </h6>
                    <h6 class="nav-link ml-5"> วิธีที่ 2. โอนเข้าบัญชีธนาคาร กรุณาอัฟโหลดหลักฐานการโอน จากนั้นคลิกปุ่ม "ส่ง" </h6>
                </h6>
                <h6 class="nav-link ml-3"> 6. แจ้งการชำระเงิน </h6>
                <h6 class="nav-link ml-3"> 7. รอทางร้านตรวจสอบการชำระเงิน และจัดส่งสินค้า </h6>

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