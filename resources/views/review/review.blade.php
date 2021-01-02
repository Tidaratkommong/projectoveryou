<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Over You 99</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<br>

<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review">
            <div class="description-review-title nav" role=tablist>

                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    <h5>Description....   </h5>
                </a>

              
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    <h5>   Reviews </h5>
                </a></a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                </div>
                <!-- review -->
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <div class="breadcrumb">
                        <div class="page-overlay-bg bg-light">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <br>
                                            <h6><span style="font-size: 21px;">&nbsp;&nbsp; รีวิวจากผู้ใช้ </span></h6>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="vcex-module vcex-divider vcex-divider-solid wpex-max-w-100 wpex-mx-auto wpex-block wpex-h-0 wpex-border-b wpex-border-solid wpex-border-gray-200" style="margin-top:10px;margin-bottom:15px;"></div>
                                    <div class="someka-product-page-reviews">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <ol class="commentlist">
                                                    <div id="comment-32503" class="comment_container">

                                                   
                                                        <div class="comment-text">
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author"></strong>
                                                                <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date" datetime="2017-08-23T22:00:25+03:00"></time>
                                                            </p>

                                                            <!--<div class="star-rating" role="img" aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span></div> -->

                                                            <div class="description">
                                                                <p>&nbsp;&nbsp;&nbsp;</p>
                                                            </div>
                                                        </div>
                                                  
                                                    </div>

                                                </ol>

                                            </div>


                                            <hr>
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title"> &nbsp;&nbsp;แสดงความคิดเห็นจากลูกค้า <small><a rel="nofollow" id="cancel-comment-reply-link" href="/excel-template/personal-reviews-ratings-database/#respond" style="display:none;">Cancel reply</a></small></span>
                                                        <form method="POST" action="{{route('review.store')}}" >
                                                        @csrf
                                                            <p class="comment-notes"><span id="email-notes"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่อีเมลของคุณจะไม่ถูกเผยแพร่ </span> <span class="required text-danger">*</span></p>


                                                            <div class="form-group">
                                                                <label for="title_review">&nbsp;รีวิวสินค้า <span class="required text-danger">*</span></label>
                                                                <textarea class="form-control" name="title_review" rows="4" />{{old('title_review')}}</textarea>
                                                            </div>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="name_review">&nbsp;ชื่อ<span class="required text-danger">*</span></label>
                                                                    <input type="text" name="name_review" class="form-control input-lg" value="{{old('name_review')}}" />
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="email_review">&nbsp;อีเมล <span class="required text-danger">*</span></label>
                                                                    <input type="text" name="email_review" class="form-control input-lg" value="{{old('email_review')}}" />
                                                                </div>

                                                            </div>

                                                            &nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-success">บันทึก</button>
                                                            <br>
                                                            <br>
                                                            </form>
                                                    </div><!-- #respond -->
                                                </div>
                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>