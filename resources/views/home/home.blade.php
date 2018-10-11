@extends('layouts.page')
@section('content')
<main>
    <section class="container">
        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="/home/img/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>SALE OF -30%</h3>
                            <p>Winter collection for women's. <br>We all have choices for you. Check it out!</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">View collection</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/home/img/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>NEW COLLECTION</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Shopping now</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="/home/img/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>SUMMER TRENDS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Start shopping</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Popular Products -->
        <div class="fr-pop-wrap">
            <h3 class="component-ttl"><span>All category</span></h3>
            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">ALL</a></li>
                <li><a data-frpoptab-num="2" data-frpoptab="#frpoptab-tab-2" href="#">Woment</a></li>
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Men</a></li>
                <li><a data-frpoptab-num="4" data-frpoptab="#frpoptab-tab-4" href="#">Trẻ em</a></li>
                <li><a data-frpoptab-num="5" data-frpoptab="#frpoptab-tab-5" href="#">Thế giới giày</a></li>
            </ul>
            <div class="fr-pop-tab-cont">
                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">Tất cả các loại</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">
                    <ul class="slides">
                        @foreach($products as $items)
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="#" class="prod-i-img"><img src="/page/image/product/{{$items->image}}" alt="Aspernatur excepturi rem"></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Yêu thích</span><i class="fa fa-heart"></i></a>
                                    <a href="#" data-product-id='{{ $items->product_id }}' class="qview-btn prod-i-qview"><span>Chi tiết</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Xem chi tiết</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">{{ $items->title }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{ number_format($items->unit_price)}}đ</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="/home/img/color/red.jpg" alt="Red"></li>
                                    <li><img src="/home/img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <p data-frpoptab-num="2" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-2">Women</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-2">
                    <ul class="slides">
                        @foreach($productsWoment as $items)
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="/page/image/product/{{$items->image}}" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="#">{{ $items->title }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{ number_format($items->unit_price)}}đ</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="/home/img/color/red.jpg" alt="Red"></li>
                                    <li><img src="/home/img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">Men</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">
                    <ul class="slides">
                        @foreach($productsMen as $items)
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><img src="/page/image/product/{{$items->image}}" alt="Amet tempore unde"></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="#">{{ $items->title }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{ number_format($items->unit_price)}}đ</b>
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Kids</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">
                    <ul class="slides">
                        @foreach($productsKids as $items)
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="/page/image/product/{{$items->image}}" alt="Nisi provident atque"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="#">{{ $items->title }}</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>{{ number_format($items->unit_price)}}đ</b>
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Shoes</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">
                    <ul class="slides">
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/252x250" alt="Nisi autem error"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Nisi autem error</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$95</b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/316x250" alt="Tempora ea ratione vel"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>

                                <div class="prod-sticker">
                                    <p class="prod-sticker-2">HIT</p>
                                </div>
                            </div>
                            <h3>
                                <a href="product.html">Tempora ea ratione vel</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$120</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/281x250" alt="Minus sequi iste"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Minus sequi iste</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$135</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/265x250" alt="Dignissimos fuga voluptates totam"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dignissimos fuga voluptates totam</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$85</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/291x250" alt="Perferendis recusandae"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Perferendis recusandae</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$70</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/277x250" alt="Officiis nihil culpa"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Officiis nihil culpa</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$180</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/295x250" alt="Distinctio modi quos"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Distinctio modi quos</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$195</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/301x250" alt="Corrupti velit vero"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Corrupti velit vero</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$220</b>
                            </p>
                        </li>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="http://placehold.it/289x250" alt="Dicta doloremque hic"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    <a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Add to cart</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.html">Dicta doloremque hic</a>
                            </h3>
                            <p class="prod-i-price">
                                <b>$90</b>
                            </p>
                        </li>

                    </ul>

                </div>
            </div><!-- .fr-pop-tab-cont -->
        </div><!-- .fr-pop-wrap -->
        <!-- Banners -->
        <div class="banners-wrap">
            <div class="banners-list">
                <div class="banner-i style_11">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/560x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">NEW COLLECTION</p>
                        <h3 class="banner-i-ttl">MEN'S<br>CLOTHING</h3>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">GREAT COLLECTION</p>
                        <h3 class="banner-i-ttl">CLOTHING<br>ACCESSORIES</h3>
                        <p class="banner-i-link"><a href="section.html">Show more</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">SPORT<br>CLOTHES</h3>
                        <p class="banner-i-link"><a href="section.html">Go to catalog</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">MEN AND <br>WOMEN SHOES</h3>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/270x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">DISCOUNT -20%</p>
                        <h3 class="banner-i-ttl">HATS<br>COLLECTION</h3>
                        <p class="banner-i-link"><a href="section.html">Shop now</a></p>
                    </div>
                </div>
                <div class="banner-i style_12">
                    <span class="banner-i-bg" style="background: url(http://placehold.it/560x360);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">STYLISH CLOTHES</p>
                        <h3 class="banner-i-ttl">WOMEN'S COLLECTION</h3>
                        <p>A great selection of dresses, <br>blouses and women's suits</p>
                        <p class="banner-i-link"><a href="section.html">View More</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Special offer</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/120x120" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dicta doloremque</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$115</b> <del>$135</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/99x120" alt="Similique delectus">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Similique delectus</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$105</b> <del>$120</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/75x120" alt="Adipisci nemo">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Adipisci nemo</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$70</b> <del>$90</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/65x120" alt="Ullam harum">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Ullam harum</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$55</b> <del>$75</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/78x120" alt="Similique delectus">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Similique delectus</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$135</b> <del>$155</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/81x120" alt="Туфли Dr.Koffer">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Туфли Dr.Koffer</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$190</b> <del>$210</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/117x120" alt="Quod consequatur">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Quod consequatur</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$120</b> <del>$140</del>
                        </p>
                    </li>
                    <li class="discounts-i">
                        <a href="product.html" class="discounts-i-img">
                            <img src="http://placehold.it/80x120" alt="Dolore fugit">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.html">Dolore fugit</a>
                        </h3>
                        <p class="discounts-i-price">
                            <b>$80</b> <del>$95</del>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="discounts-info">
                <p>Special offer!<br>Limited time only</p>
                <a href="catalog-list.html">Shop now</a>
            </div>
        </div>


        <!-- Latest news -->
        <div class="posts-wrap">
            <div class="posts-list">
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>30</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Reviews</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Animi quaerat at</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>29</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">Articles</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Ex atque commodi</a>
                        </h3>
                    </div>
                </div>
                <div class="posts-i">
                    <a class="posts-i-img" href="post.html">
                        <span style="background: url(http://placehold.it/354x236)"></span>
                    </a>
                    <time class="posts-i-date" datetime="2016-11-09 00:00:00"><span>25</span> Jan</time>
                    <div class="posts-i-info">
                        <a href="blog.html" class="posts-i-ctg">News</a>
                        <h3 class="posts-i-ttl">
                            <a href="post.html">Hic quod maxime deserunt</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Testimonials -->
        <div class="reviews-wrap">
            <div class="reviewscar-wrap">
                <div class="swiper-container reviewscar">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Corrupti velit, vero esse, aperiam error magni illum quos, accusantium debitis et possimus recusandae tempora ad itaque dolorem veniam non voluptatem impedit iste? Dicta doloremque hic porro aspernatur. Dolores eligendi similique, cumque, eius veritatis</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Distinctio modi, quos, vero quibusdam ab deserunt doloribus eligendi velit temporibus ratione at est officia repellat? Adipisci nemo expedita rerum distinctio laudantium nihil voluptatem ullam vel ex magnam velit aliquid voluptate voluptatum excepturi</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Similique delectus totam ex cum magnam quasi, ipsam officiis amet temporibus enim modi rerum quo maxime reprehenderit, deserunt, libero quas distinctio quos! Ullam harum nesciunt omnis consectetur distinctio? Iste sunt, dolorem deserunt quibusdam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Tempora ea ratione vel nisi, qui perferendis nulla, fugit aut, beatae, tempore modi. Minus sequi iste, nam nobis, excepturi nihil consequuntur reprehenderit ipsam, quam consequatur in. Esse, doloremque consectetur veniam quo ut voluptas necessitatibus</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Perferendis recusandae consequuntur quasi, non culpa. Minus porro officiis veniam facilis praesentium expedita doloribus, recusandae aut dolore autem, modi consequuntur rem perferendis dolores quisquam, sequi quas. Iusto et, eius laboriosam beatae</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Aliquid soluta nisi incidunt, dolores sequi itaque sunt et nesciunt delectus ipsam est molestias illo obcaecati, totam ducimus cumque consequuntur modi, laudantium! Temporibus vero odit quis, quibusdam maiores voluptatum sunt dolor tempora architecto fugiat quam.</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Ea reiciendis modi, molestiae dolores beatae facere quas	consequatur delectus ducimus, magni voluptates, eius, quia unde ut vitae doloribus illum! Optio saepe, modi aliquid perferendis veniam</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit, eaque dolorem odio praesentium iusto amet voluptatum distinctio iste dicta maiores doloremque porro. Ipsa doloremque illum animi laborum quo in nemo delectus</p>
                        </div>
                        <div class="swiper-slide">
                            <p>Eveniet nobis minus possimus eius, doloribus ex similique debitis nihil at facere delectus unde, commodi, alias. Eius facilis, dolore officia veritatis, doloribus voluptatem aliquid rem corporis quam officiis at dignissimos dolorum, velit assumenda</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container reviewscar-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Aureole Jayde">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Aureole Jayde</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Benjy Darrin">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Benjy Darrin</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Jeni Margie">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Jeni Margie</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Edweena Chelsea">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Edweena Chelsea</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Sean Rudolph">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Sean Rudolph</a></h3>
                            <p class="reviewscar-post">Designer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Brigham Murphy">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Brigham Murphy</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Barrie Roderick">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Barrie Roderick</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="John Doe">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">John Doe</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Shirlee Annabel">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Shirlee Annabel</a></h3>
                            <p class="reviewscar-post">Developer</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Lettice Alyce">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Lettice Alyce</a></h3>
                            <p class="reviewscar-post">Director</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Meriel Glory">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Meriel Glory</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://placehold.it/120x120" alt="Janene Alaina">
                            <h3 class="reviewscar-ttl"><a href="reviews.html">Janene Alaina</a></h3>
                            <p class="reviewscar-post">Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Form -->
        <div class="newsletter">
            <h3>Subscribe to us</h3>
            <p>Enter your email if you want to receive our news</p>
            <form action="#">
                <input placeholder="Your e-mail" type="text">
                <input name="OK" value="Subscribe" type="submit">
            </form>
        </div>

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap modal-quick-view-detail">

            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</main>
@endsection