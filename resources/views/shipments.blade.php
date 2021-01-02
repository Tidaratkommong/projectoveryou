@extends('layouts.navbar')

@section('content')

<div class="container">
    <br/>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <h1 class="nav-link"> ตรวจสอบการจัดส่ง </h1>
        </li>
    </ul>
    <br/>
     <!-- Search form -->
    <form class="form-inline d-flex justify-content-center my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="ค้นหาจากหมายเลขการสั่งซื้อของท่าน" aria-label="Search" style="width: 60rem; height:3rem;">
    <i class="fas fa-search text-success fa-2x" aria-hidden="true"></i>                            
    </form>
    
    <br/>
    <br/>
    <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col"><h5>หมายเลขการสั่งซื้อ</h5></th>
      <th scope="col"><h5>วันที่สั่งซื้อ</h5></th>
      <th scope="col"><h5>ราคา</h5></th>
      <th scope="col"><h5>สถานะการสั่งซื้อ</h5></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
    </tr>
    
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>

  

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
    <h5 class="nav-link text-danger"> ** ข้อมูลการจัดส่งสินค้า
       <h6 class="nav-link ml-3 text-danger"> 1. สินค้าปกติจะส่งถึงมือคุณภายใน 2-5 วันทำการ</h6>                       
    </h5>
</div>

<br/>
<br/>
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br/>
    <br/>
    
</ul>


<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"00208c9fb9574ea5",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>




@endsection