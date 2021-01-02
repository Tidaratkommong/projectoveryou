<div class="might-like-section">
    <div class="container">
        <h4> สินค้าที่คุณอาจจะชอบ... </h4>

        <main>
            <div class="page-overlay-bg">
                <div class="container-fluid m-0 p-0">
                    <!--container-fluid-->
                    <div class="row no-gutters px-0">
                        <!--row-->
                        @foreach ($mightAlsoLike as $product)
                        <div class="col-6 col-sm-5 col-md-3 bg-light px-1">
                            <div href="javascript:void(0);">
                                <a href="{{ route('shop.show',$product->id )}}" class="card  mb-2 shadow-sm" style="width: 18rem; height:20rem;">
                                    <img class="text-center w-100" src="{{asset($product->product_img )}}" style="width: 130px; max-height:220px;"/>
                                    <h5 class=" text-dark">{{ $product->product_name }}</h5>
                                    <p class=" text-dark">{{ str_limit(strtolower($product->product_detail), 50) }}</p>
                                    <p class=" text-dark"><strong>ราคา : </strong> {{$product->product_price }} $</p>
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