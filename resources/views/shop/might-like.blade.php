<div class="might-like-section">
    <div class="container">
        <h4>คุณอาจจะชอบ...</h4>
        <div class="breadcrumb">
            <main>
                <div class="page-overlay-bg">
                    <div class="container-fluid m-0 p-0">
                        <!--container-fluid-->
                        <div class="row no-gutters px-0">
                            <!--row-->
                            @foreach ($mightAlsoLike as $product)
                            <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
                                <div href="javascript:void(0);">
                                    <a href="{{ route('shop.show',$product->id )}}" class="card  mb-2 shadow-sm" style="width: 12rem; height:16rem;">
                                        <img class="text-center w-100" src="{{asset($product->product_img )}}" style="max-width: 130px; max-height:200px;"/ >
                                        <div class="might-like-product-name text-dark text-center">{{ $product->product_name }}</div>
                                        <div class="might-like-product-price text-dark text-center">ราคา {{ $product->product_price}} บาท</div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--row-->
                    </div>
                    <!--container-fluid-->
                </div><!-- page-main-->
            </main>
        </div>
    </div>
</div>
</div>
© 202