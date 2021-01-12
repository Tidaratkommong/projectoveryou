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
<div class="product-section container">
    <br>
    <br>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0 ?>
            @if(session('cart.cart'))
            @foreach(session('cart.cart') as $id => $details)

            <?php $total += $details['product_price'] * $details['product_num'] ?>

            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['product_img'] }}" width="100" height="100" class="img-responsive" /></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['product_price'] }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['product_num'] }}" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ $details['product_price'] * $details['product_num'] }}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
            @endforeach
            @endif

        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total {{ $total }}</strong></td>
            </tr>
            <tr>
                <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection