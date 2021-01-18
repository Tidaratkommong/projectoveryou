@extends('layouts.test')

@section('content')
<br>
<br>

<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/shop')}}" class="text-success"> Shop </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span class="text-dark"><a href="#" class="text-success"> </a></span>
</h4>

<br>
<!-- show size -->
<div class="container ">
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="card mb-5" style="max-width: 560px; margin:10px;  padding: 24px; " height="260">

                <p class="card-text text-dark "><strong> ตารางไซส์เสื้อ </strong></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ขนาด</th>
                            <th scope="col">รอบอก(เสื้อ)</th>
                            <th scope="col">รอบคอ(เสื้อ)</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">S</th>
                            <td>42 cm.</td>
                            <td>15 cm.</td>
                            
                        </tr>
                        <tr>
                            <th scope="row">M</th>
                            <td>44 cm.</td>
                            <td>15.5 cm.</td>
                            
                        </tr>
                        <tr>
                            <th scope="row">L</th>
                            <td>46 cm.</td>
                            <td>16 cm.</td>
                           
                        </tr>
                        <tr>
                            <th scope="row">XL</th>
                            <td>48 cm.</td>
                            <td>16.5 cm.</td>
                          
                        </tr>
                        <tr>
                            <th scope="row">XXL</th>
                            <td>50 cm.</td>
                            <td>17.5 cm.</td>
                            
                        </tr>

                    </tbody>
                </table>
            </div>

            
        </div>


        <div class="form-group col-md-6">
            <div class="card mb-5" style="max-width: 560px; margin:10px;  padding: 24px; " height="260">

                <p class="card-text text-dark "><strong> ตารางไซส์ กางเกง </strong></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ขนาด</th>
                            <th scope="col">เอว</th>
                            <th scope="col">รอบ</th>
                            <th scope="col">ยาว</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">S</th>
                            <td>42 cm.</td>
                            <td>15 cm.</td>
                            <td>23.6</td>
                        </tr>
                        <tr>
                            <th scope="row">M</th>
                            <td>44 cm.</td>
                            <td>15.5 cm.</td>
                            <td>23.6</td>
                        </tr>
                        <tr>
                            <th scope="row">L</th>
                            <td>46 cm.</td>
                            <td>16 cm.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">XL</th>
                            <td>48 cm.</td>
                            <td>16.5 cm.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">XXL</th>
                            <td>50 cm.</td>
                            <td>17.5 cm.</td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
    </div>





    <!-- end product-section -->

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