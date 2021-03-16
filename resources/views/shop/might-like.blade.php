<style>
    .main-section {
        background-color: #F8F8F8;
    }

    .dropdown {
        float: right;
        padding-right: 30px;
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
<div class="container products">
    <h4> สินค้าที่คุณอาจจะชอบ... </h4>
    <div class="row">
        @foreach ($mightAlsoLike as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <a href="{{ route('shop.show',$product->id )}}">
                <div class="thumbnail">
                    <img src="{{asset($product->product_img )}}" width="450" height="250">
                    <div class="caption">
                        <h5 class=" text-dark">{{ $product->product_name }}
                            @if($product->product_method=='new')
                            <span class="badge badge-danger">{{$product->product_method}}</span>
                            @elseif($product->product_method=='sale')
                            <span class="badge badge-success">{{$product->product_method}}</span>
                            @elseif($product->product_method=='hot')
                            <span class="badge badge-warning">{{$product->product_method}}</span>
                            @endif
                        </h5>
                        <p class=" text-dark">{{ str_limit(strtolower($product->product_detail), 50) }}</p>
                        <p class=" text-dark"><strong class=" text-dark">ราคา: </strong> {{$product->product_price }} บาท </p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div><!-- End row -->

</div>


<!-- 

<div class="might-like-section">
    <div class="container">
        <h4> สินค้าที่คุณอาจจะชอบ... </h4>
        <main>
            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid
                    <div class="row no-gutters px-0">
                        <!--row-
                        @foreach ($mightAlsoLike as $product)
                        <div class="col-6 col-sm-5 col-md-3 bg-light px-1">
                            <div href="javascript:void(0);">
                                <a href="{{ route('shop.show',$product->id )}}" class="card  mb-2 shadow-sm" style="width: 18rem; height:24rem;">
                                    <img class=" w-100" src="{{asset($product->product_img )}}" style="width: 90px; max-height:270px;" />
                                    <div class="caption">
                                        <h5 class=" text-dark">&nbsp;&nbsp;{{ $product->product_name }}</h5>
                                        <p class=" text-dark">&nbsp;&nbsp;{{ str_limit(strtolower($product->product_detail), 50) }}
                                            <br> &nbsp;&nbsp;<strong>ราคา : </strong> {{$product->product_price }} $
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--row
                </div>
                <!--container-fluid
            </div><!-- page-main
        </main>
    </div>
</div>
</div>
</div>
-->
© 202