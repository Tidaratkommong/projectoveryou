@extends('layouts.test')


@section('content')
<style>
    .main-section {
        background-color: #F8F8F8;
    }

    .dropdown {
        float: right;
        padding-right: 30px;
    }

    .btn {
        border: 0px;
        margin: 10px 0px;
        box-shadow: none !important;
    }

    .dropdown .dropdown-menu {
        padding: 20px;
        top: 30px !important;
        width: 350px !important;
        left: -110px !important;
        box-shadow: 0px 5px 30px black;
    }

    .total-header-section {
        border-bottom: 1px solid #d2d2d2;
    }

    .total-section p {
        margin-bottom: 20px;
    }

    .cart-detail {
        padding: 15px 0px;
    }

    .cart-detail-img img {
        width: 100%;
        height: 100%;
        padding-left: 15px;
    }

    .cart-detail-product p {
        margin: 0px;
        color: #000;
        font-weight: 500;
    }

    .cart-detail .price {
        font-size: 12px;
        margin-right: 10px;
        font-weight: 500;
    }

    .cart-detail .count {
        color: #C2C2DC;
    }

    .checkout {
        border-top: 1px solid #d2d2d2;
        padding-top: 15px;
    }

    .checkout .btn-primary {
        border-radius: 50px;
        height: 50px;
    }

    .dropdown-menu:before {
        content: " ";
        position: absolute;
        top: -20px;
        right: 50px;
        border: 10px solid transparent;
        border-bottom-color: #fff;
    }

    .thumbnail {
        position: relative;
        padding: 0px;
        margin-bottom: 20px;
    }

    .thumbnail img {
        width: 100%;
    }

    .thumbnail .caption {
        margin: 7px;
    }

    .page {
        margin-top: 50px;
    }

    .btn-holder {
        text-align: center;
    }

    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        vertical-align: middle;
    }

    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control {
            width: 20%;
            display: inline !important;
        }

        .actions .btn {
            width: 36%;
            margin: 1.5em 0;
        }

        .actions .btn-info {
            float: left;
        }

        .actions .btn-danger {
            float: right;
        }

        table#cart thead {
            display: none;
        }

        table#cart tbody td {
            display: block;
            padding: .6rem;
            min-width: 320px;
        }

        table#cart tbody tr td:first-child {
            background: #333;
            color: #fff;
        }

        table#cart tbody td:before {
            content: attr(data-th);
            font-weight: bold;
            display: inline-block;
            width: 8rem;
        }



        table#cart tfoot td {
            display: block;
        }

        table#cart tfoot td .btn {
            display: block;
        }

    }
</style>
<br>
<h4 class="col-md-6">
    <a href="{{url('/home')}}" class="text-success"> Home </a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span><a href="{{url('/shop')}}" class="text-success"> Shop </a></span>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span class="text-dark">ตะกร้าสินค้าของคุณ</span>
</h4>
<div class="product-section container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:40%">สินค้า</th>
                <th style="width:15%">ราคา </th>
                <th style="width:15%">size </th>
                <th style="width:20%">จำนวน</th>
                <th style="width:22%" class="text-center">รวม</th>
                <th style="width:10%">แก้ไข</th>
            </tr>
        </thead>
        <tbody>

            @foreach($cartItems as $item)
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <!--<img  src="{{asset($item->img )}}" atl="{{asset($item->img )}}" width="60" height="80" class="img-responsive" />-->
                        </div>
                        <div class="col-sm-9">
                            <h5 class="nomargin">{{$item->name}}</h5>
                            </h5>
                        </div>
                    </div>
                </td>

                <td data-th="Price">

                    {{$item->price}} บาท{{number_format($item->price,2)}}
                    
                </td>

                <td data-th="Quantity">
                    <select name="status" id="" class="form-control">
                        <option value="new">S</option>
                        <option value="process">M</option>
                        <option value="delivered">L</option>
                        <option value="cancel" >XL</option>
                        <option value="cancel" >XXL</option>
                    </select>
                </td>


                <td data-th="Quantity">
                    <form action="{{route('cart.update',$item->id)}}">

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <input name="quantity" type="number" value="{{$item->quantity}}" class="form-control " />
                            </div>

                            <div class="form-group col-md-6">
                                <input type="submit" value="save" class="form-control quantity" />
                            </div>

                        </div>
                    </form>

                </td>

                <td data-th="Subtotal" class="text-center"> {{\Cart::session(auth()->id())->get($item->id)->getPriceSum()}} บาท </td>
                <td class="actions" data-th="">
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="#">
                        <a href="{{route('cart.destroy',$item->id)}}" class="text-light">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>

            <tr>
                <td><a href="{{route('cart.checkout')}}" class="btn btn-primary"> ดําเนินการชําระเงิน</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center">
                    <h4>
                        รวม :{{\Cart::session(auth()->id())->getTotal()}}

                    </h4>
                </td>

            </tr>
        </tfoot>
    </table>
</div>

<br />
<br />
<ul class="nav justify-content-center bg-dark fixed-bottom ">
    <li class="nav-item">
        <a class="btn btn-link" href="#"></a>
    </li>
    <br />

</ul>


@endsection