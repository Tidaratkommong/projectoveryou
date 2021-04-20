@extends('layouts.test')

@section('content')

<div class="container">
    <br>
    <h2 class="nav-link"> การเคลมสินค้า [CLAIM PRODUCT] </h2>
    <div class="card">
        <h2 class="nav-link text-center"> ส่งคำร้องการเคลมสินค้า </h2>
        <form style="margin: 20px;" method="POST" action="{{route('claim.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">ชื่อ - สกุล</label>
                    <input type="text" name="name" class="form-control input-lg" placeholder="ชื่อ - สกุล"  required />
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name="email" pattern=".+@gmail.com" class="form-control input-lg" placeholder="อีเมล" required />
                </div>

                <div class="form-group col-md-6">
                    <label for="product_name">ชื่อสินค้า</label>
                    <input type="text" name="product_name" class="form-control input-lg" placeholder="ชื่อสินค้า" required />
                </div>

                <div class="form-group col-md-6">
                    <label for="telephone">เบอร์โทร</label>
                    <input type="text" name="telephone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control input-lg" placeholder="เบอร์โทร" required />
                </div>
            </div>

            <div class="form-group">
                <label for="address">ที่อยู่</label>
                <textarea class="form-control" name="address" placeholder="ที่อยู่" rows="4" required /></textarea>
            </div>

            <div class="form-group">
                <label for="detail">รายละเอียด</label>
                <textarea class="form-control" name="detail" placeholder="รายละเอียด" rows="4" required /></textarea>
            </div>

            <br />
            <div class="form-group">
                <label for="exampleInputFile">Select Profile Image</label>
                <input type="file" name="image" required />
            </div>
            <button type="submit" class="btn btn-success">บันทึก</button>

            </from>
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