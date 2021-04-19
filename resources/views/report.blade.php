@extends('layouts.app')
@section('content')
<div class="container">
    <br />
    <hr style="background-color: #FA8072;">
    <h3>สรุปยอดขายสินค้า [Sales Summary]</h3>
    <h5>วันที่:
        <!-- Right Side Of Navbar -->
        <!-- Authentication Links -->
        <!-- time -->
        <?php
        $_month_name = array(
            "01" => "มกราคม",  "02" => "กุมภาพันธ์",  "03" => "มีนาคม",
            "04" => "เมษายน",  "05" => "พฤษภาคม",  "06" => "มิถุนายน",
            "07" => "กรกฎาคม",  "08" => "สิงหาคม",  "09" => "กันยายน",
            "10" => "ตุลาคม", "11" => "พฤศจิกายน",  "12" => "ธันวาคม"
        );

        $vardate = date('Y-m-d');
        $yy = date('Y');
        $mm = date('m');
        $dd = date('d');
        if ($dd < 10) {
            $dd = substr($dd, 1, 2);
        }
        $date = $dd . " " . $_month_name[$mm] . "  " . $yy += 543;
        echo $date;
        ?>

    </h5>
    <hr style="background-color: #FA8072;">

    <!-- detail order_item-->
    <div class="form-row">

        <div class="col-md-10">
            <div class=" pd-20 pd-sm-30">
                <table class=" table table-bordered">
                    <tr style="background-color: #FA8072;" class="text-center">
                        <th width="2%">รหัสสินค้า </th>
                        <th width="15%">สินค้า</th>
                        <th width="5%">ราคา/ชิ้น</th>
                        <th width="5%">จำนวน</th>
                    </tr>

                    @foreach($cartItems as $value)
                    <tr>

                        <td>{{ $value->product_id }}</td>
                        <td>{{ $value->name}}</td>
                        <td class="text-center">{{ $value->price }}</td>
                        <td class="text-center">{{ $value->quantity }}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>

        <div class=" col-md-2">
            <div class=" pd-20 pd-sm-30">
                <table class=" table table-bordered">
                    <tr style="background-color: #FA8072;" class="text-center">
                        <th width="5%">ราคารวม</th>
                    </tr>
                    @foreach($orders as $value)
                    <tr>
                        <td class="text-center">  ฿ {{ $value->grand_total }}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>

<hr style="background-color: #FA8072;">
<h5> รายละเอียด </h5>

<!-- detail Sum_orders-->

<div class="form-row justify-content-center">
    @foreach($order as $value)
    <div class="col-md-6">
        <div class="card pd-20 pd-sm-30 text-center">
            <br>
            <h5>บิลทั้งหมดทั้งหมด</h5>
            <h5>{{ $value->id }} </h5>
            <br>
        </div>
    </div>
    @endforeach

    @php
    $sumPrice = 0;

    foreach($getOrder as $value){

    $sumTotal = $sumPrice += $value->grand_total;
    }
    @endphp

    <div class="col-md-6">
        <div class="card pd-20 pd-sm-30 text-center">
            <br>
            <h5>รวมยอดเงินที่ได้รับ</h5>
            <h5> ฿ {{number_format($sumTotal)}}</h5>
            <br>
        </div>
    </div>



</div>

<br>
<div class="form-row justify-content-center">
    @foreach($user as $user)
    <div class="col-md-6">
        <div class="card pd-20 pd-sm-30 text-center">
            <br>
            <h5>จำนวนลูกค้าทั้งหมด</h5>
            <h5>{{ $user->id }} users </h5>
            <br>
        </div>
    </div>
    @endforeach

    <div class="col-md-6">
        <div class="card pd-20 pd-sm-30 text-center">
            <br>
            <h5>คืนเงิน</h5>
            <h5>฿ 0 </h5>
            <br>
        </div>
    </div>

    <div class=" col-md-5">
        <div class="small-box  text-center ">
            <div class="inner">
                <br>
                <br>
                <h5> ///////////////////////////////////////////////////////////////////////////////////////////// </h5>
            </div>
        </div>
    </div>

</div>








@endsection