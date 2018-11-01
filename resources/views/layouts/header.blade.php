<header class="header">
    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +0977970263
                </li>
                <li>
                    <i class="fa fa-envelope"></i> nbthong2201@gmail.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="javascript:void(0)" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="#" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="{{ route('home') }}">
                    <img src="/home/img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="{{ route('getListWishList') }}">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Danh sách yêu thích</span>
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="shop-menu-ttl">Sản phẩm đã xem</span> (5)
                        </a>
                    </li>
                    @if(Auth::check())
                    <li class="topauth">
                        <a href="#">
                            <span class="shop-menu-ttl">{{Auth::user()->name}}</span>
                        </a>
                        <a href="{{ route('logout') }}">
                            <span class="shop-menu-ttl">Đăng xuất</span>
                        </a>
                    </li>
                    @else
                    <li class="topauth">
                        <a href="{{ route('login') }}">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Đăng nhập</span>
                        </a>
                        <a href="{{ route('register') }}">
                            <span class="shop-menu-ttl">Đăng kí</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <div class="h-cart">
                            <a href="{{ route('cartTop') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Gió hàng</span>
                                @if(session()->has('cartNew'))
                                (<b class="total-cart">{{ session()->get('cartNew.quantity') }}</b>)
                                @else
                                (<b class="total-cart">0</b>)
                                @endif
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="javascript:void(0)"><span>Tất cả</span> Các Loại</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="{{ route('category', 1) }}">
                                Shop Nữ
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                @foreach($listCategory as $items)
                                    @if($items->sex == 1 || $items->sex == 3)
                                        <li>
                                            <a href="{{ route('category', $items->title_sale) }}">
                                                {{ $items->title }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('category', 2) }}">
                                Shop Nam
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                @foreach($listCategory as $items)
                                    @if($items->sex == 2 || $items->sex == 3)
                                        <li>
                                            <a href="{{ route('category', $items->title_sale) }}">
                                                {{ $items->title }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Trẻ Em
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                @foreach($listCategory as $items)
                                    @if($items->sex == 0)
                                        <li>
                                            <a href="{{ route('category', $items->title_sale) }}">
                                                {{ $items->title }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Shoes
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Women
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Elyse
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Odette
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Brody
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Flats
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Men
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Casual Shoes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Mules & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Children's
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Girls
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boys
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Baby Shoe
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                First Walkers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="{{ route('home') }}" class="active">Trang chủ</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0)">
                            Các Loại <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            @foreach($listCategory as $items)
                                <li>
                                    <a href="{{ route('category', $items->title_sale) }}">
                                        {{ $items->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Quần áo</a>
                            </li>
                            <li>
                                <a href="#">Giày dép</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Liên hệ</a>
                    </li>
                    <li>
                        <a href="/">Blog</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('contacts') }}">Liên hệ</a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    Cart
                                </a>
                            </li>
                            <li>
                                <a href="auth.html">
                                    Authorization
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    Compare
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    Wishlist
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    Error 404
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->
</header>