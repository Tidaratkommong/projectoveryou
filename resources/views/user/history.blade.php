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
                <th style="width:5%"></th>
                <th style="width:40%">สินค้า</th>
                <th style="width:15%">ราคา</th>
                <th style="width:20%">จำนวน</th>
                <th style="width:20%"></th>
            </tr>
        </thead>
              
        <tbody>
            <tr>
                <td data-th="Price"> </td>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-9">
                            <h5 class="nomargin">..........................</h5>
                        </div>
                    </div>
                </td>

                <td data-th="Price">
                    บาท
                </td>

                <td data-th="Quantity">
                    <div class="form-group col-md-6">
                        1 ตัว
                    </div>
                </td>

                <td class="actions" data-th="">
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="#">
                        <a href="#" class="text-light">
                            ซื้ออีกครั้ง
                        </a>
                    </button>
                </td>
            </tr>        
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