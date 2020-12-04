@extends('layouts.navbar')

@section('content')

<div class="container">
    <br />
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <h1 class="nav-link">การช่วยเหลือ</h1>
        </li>
    </ul>

    <div class="row justify-content-center bg-warning">
        <div class="col-md-11">
            <div class="card">
                <ul class="navbar-nav mr-auto ">
                    <br />
                    <li class="nav-item active">
                        <h5 class="nav-link ml-2 text-black"> การซื้อสินค้า </h5>
                    </li>
                    <li class="nav-item active">
                        <h6 class="nav-link ml-3"> 1. ค้นหาสินค้าที่ต้องการ
                            <h7 class="nav-link ml-3">** คุณสามารถค้นหาสินค้าที่คุณต้องการได้อย่างหลากหลาก ไม่ว่าจะเป็นชื่อสินค้า,หมวดหมู่สินค้าหรือใช้แถบค้นหาสินค้า</h7>
                            <h6 class="nav-link ml-4"> >>การค้นหาสินค้า </h6>
                            <h6 class="nav-link ml-5"> 1. กดช่องค้นหา และพิมพ์ชื่อสินค้าที่คุณต้องการ </h6>
                            <h6 class="nav-link ml-5"> 2. กดเลือก สินค้า จากผลการค้นหาที่ขึ้น</h6>
                            <h6 class="nav-link ml-5"> 3. เมื่อเจอสินค้าที่ต้องการ กด “เพิ่มไปยังรถเข็น” เพื่อทำการเลือกขนาด/สี ที่ต้องการ</h6>
                            <h6 class="nav-link ml-5"> 4. หลังจากเลือกรายละเอียดสินค้าเรียบร้อยแล้ว ให้กดที่ปุ่ม “เพิ่มไปยังรถเข็น”</h6>
                        </h6>

                    </li>
                    <li class="nav-item active">
                        <h6 class="nav-link ml-3"> 2. การซื้อ
                            <h7 class="nav-link ml-3">** หลังจากคลิกปุ่ม “ซื้อสินค้า” ผู้ซื้อต้องกรอกจำนวนสินค้าที่ต้องการ และ ต้องเลือกรายละเอียดสินค้าเพิ่มเติม เช่น เลือกสี, ขนาด,
                                จากนั้นคลิกปุ่ม "ซื้อสินค้า" คุณจะไปสู่หน้า รถเข็นสินค้า</h7>

                        </h6>

                    </li>

                    <li class="nav-item active">
                        <h6 class="nav-link ml-3"> 3. รถเข็นสินค้า
                            <h6 class="nav-link ml-5"> 1. เลือก สินค้าที่ต้องการชำระเงิน จากนั้นกด "ชำระเงิน" </h6>
                            <h6 class="nav-link ml-5"> 2. เลือกหรือเพิ่ม ที่อยู่ในการจัดส่งสินค้า วิธีการชำระเงิน</h6>
                            <h6 class="nav-link ml-5"> 3. เลือก วิธีการชำระเงินที่ต้องการ จากนั้นกด "ยืนยัน" เพื่อทำการชำระเงิน</h6>
                            <h6 class="nav-link ml-5"> 4. ตรวจสอบข้อมูลคำสั่งซื้ออีกครั้งเพื่อความถูกต้อง และคลิก สั่งสินค้า</h6>

                        </h6>

                    </li>


                </ul>
            </div>
        </div>
    </div>

    <br />
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    <br />

    <div class="row justify-content-center bg-warning">
        <div class="col-md-11">
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
                            ผู้ซื้อจะต้องส่งคำร้องของผู้ซื้อผ่านทาง Facebook ที่เพจ :Over You99 จะตรวจสอบคำร้องของผู้ซื้อแต่ละคนแบบเป็นกรณีๆ ไป </h7>



                    </li>

                </ul>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

</div>


<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
</ul>








@endsection