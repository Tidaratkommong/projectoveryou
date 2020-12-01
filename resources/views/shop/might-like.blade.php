<div class="might-like-section">
    <div class="container">
        <h3>คุณอาจจะชอบ...</h3>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
            <a  href="{{ route('shop.show',$product->id )}}" class="might-like-product">
                <img src="#" alt="product">
                <div class="might-like-product-name">{{ $product->product_name }}</div>
                <div class="might-like-product-price">{{ $product->product_name }}</div>
            </a>
            @endforeach


        </div>
    </div>
</div>
© 202