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

    @foreach($order as $value)
    <div class="text-center">
        <h5>
            <table class=" table table-bordered">
                <tr style="background-color: #FA8072;">
                    <th width="3%">ประเภท </th>
                    <th width="4%">บิล</th>
                    <th width="8%">รวมยอดเงินที่ได้รับ</th>
                </tr>
                <tr>
                    <td>ทั้งหมด</td>
                    <td> {{ $value->id }} </td>


                    <td>฿ {{number_format($value->grand_total)}}</td>
                </tr>

            </table>
            </h4>
    </div>
    @endforeach
    <br>
    <hr style="background-color: #FA8072;">
    <h5> รายละเอียด </h5>

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