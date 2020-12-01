<div class="might-like-section">
    <div class="container">
        <h3>คุณอาจจะชอบ...</h3>
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
                                <a  href="{{ route('shop.show',$product->id )}}" class="card  mb-2 shadow-sm" style="width: 16rem; height:20rem;">
                                    <img class="text-center w-100" src="#" style="width: 150px; height:250px;" />
                                    <div class=" text-dark text-center"><h5>{{ $product->product_name }}</h5></div>
                                    <div class="price text-dark text-center"><h5> ราคา :{{ $product->product_name }}<span> บาท  </h5> </span></div>
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













            <div class="might-like-grid">
                @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show',$product->id )}}" class="might-like-product">
                    <img src="#" alt="product">
                    <div class="might-like-product-name">{{ $product->product_name }}</div>
                    <div class="might-like-product-price">{{ $product->product_name }}</div>
                </a>
                @endforeach

            </div>






        </div>
    </div>
</div>
© 202