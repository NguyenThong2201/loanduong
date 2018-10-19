$(document).ready(function () {
	$('.qview-btn').on('click', function () {
		let product_id = $(this).data("product-id");
		$.ajax({
            url: '/getDetailAjax',
            type: 'GET',
            dataType: 'json',
            data: {
                'product_id': product_id
            },
            success: function (response) {
                console.log(response);
                let html = '';
                html += '<a href="product.html">' +
                    '       <h1 class="main-ttl">' +
                    '         <span>'+ response.product.title +'</span>' +
                    '       </h1>' +
                    '    </a>' +
                    '    <div class="prod-slider-wrap">' +
                    '        <div class="prod-slider">' +
                    '          <ul class="prod-slider-car">' +
                    '              <li>' +
                    '                 <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">' +
                    '                     <img src="/page/image/product/' + response.product.image + '" alt="">' +
                    '                 </a>' +
                    '              </li>' ;
                                    $.each( response.listImg ,function (key,item) {
                                        html += '<li>' +
                                            '        <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">' +
                                            '            <img src="/page/image/product/' + item.img_name + '" alt="">' +
                                            '        </a>' +
                                            '    </li>'
                                    });
                html +=      '</ul>' +
                    '      </div>' +
                    '      <div class="prod-thumbs">' +
                    '         <ul class="prod-thumbs-car">';
                                    $.each( response.listImg ,function (key,item) {
                                        html += '<li>' +
                                            '        <a data-slide-index="'+ item.img_id +'" href="#">' +
                                            '            <img src="/page/image/product/' + item.img_name + '" alt="">' +
                                            '        </a>' +
                                            '    </li>'
                                    });
                html +=    '  </ul>' +
                    '      </div>' +
                    '   </div>';
                html += '<div class="prod-cont">' +
                    '       <p class="prod-actions">' +
                    '            <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>' +
                    '            <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>' +
                    '       </p>' +
                    '       <div class="prod-skuwrap">';
                html += '       <p class="prod-skuttl">Color</p>' +
                    '               <ul class="prod-skucolor">' +
                    '                   <li class="active">' +
                    '                        <img src="img/color/blue.jpg" alt="">' +
                    '                   </li>' +
                    '                   <li>' +
                    '                        <img src="img/color/red.jpg" alt="">' +
                    '                   </li>' +
                    '                   <li>' +
                    '                         <img src="img/color/green.jpg" alt="">' +
                    '                   </li>' +
                    '                   <li>' +
                    '                         <img src="img/color/yellow.jpg" alt="">' +
                    '                   </li>' +
                    '                   <li>' +
                    '                         <img src="img/color/purple.jpg" alt="">' +
                    '                   </li>' +
                    '                   </ul>' +
                    '                   <p class="prod-skuttl">Sizes</p>' +
                    '                   <div class="offer-props-select">' +
                    '                        <p>XL</p>' +
                    '                        <ul>' +
                    '                             <li><a href="#">XS</a></li>' +
                    '                             <li><a href="#">S</a></li>' +
                    '                             <li><a href="#">M</a></li>' +
                    '                             <li class="active"><a href="#">XL</a></li>' +
                    '                             <li><a href="#">L</a></li>' +
                    '                             <li><a href="#">XXL</a></li>' +
                    '                         </ul>' +
                    '                    </div>' +
                    '            </div>' +
                    '            <div class="prod-info">' +
                    '                 <p class="prod-price">' +
                    '                      <b class="item_current_price">$238</b>' +
                    '                 </p>' +
                    '                 <p class="prod-qnt">' +
                    '                      <input type="text" value="1">' +
                    '                      <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>\n' +
                    '                      <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>\n' +
                    '                  </p>' +
                    '                  <p class="prod-addwrap">' +
                    '                       <a href="#" class="prod-add">Add to cart</a>' +
                    '                  </p>' +
                    '             </div>';
                html += '<ul class="prod-i-props">' +
                    '        <li>' +
                    '             <b>SKU</b> 05464207' +
                    '        </li>' +
                    '        <li>' +
                    '              <b>Manufacturer</b> Mayoral' +
                    '        </li>' +
                    '        <li>' +
                    '              <b>Material</b> Cotton' +
                    '         </li>' +
                    '         <li>' +
                    '              <b>Pattern Type</b> Print' +
                    '          </li>' +
                    '          <li>' +
                    '                <b>Wash</b> Colored' +
                    '          </li>' +
                    '          <li>' +
                    '                <b>Style</b> Cute' +
                    '          </li>' +
                    '          <li>' +
                    '               <b>Color</b> Blue, Red' +
                    '          </li>' +
                    '          <li><a href="#" class="prod-showprops">All Features</a></li>' +
                    '      </ul>' +
                    ' </div>';
                $(".modal-quick-view-detail").html(html);
                // Quick View button
                $('.qview-btn').fancybox({
                    content: $('.qview-modal'),
                    padding: 0,
                    helpers : {
                        overlay : {
                            locked  : false
                        }
                    }
                });

                // Product Images Slider
                if ($('.prod-slider-car').length > 0) {
                    $('.prod-slider-car').each(function () {
                        $(this).bxSlider({
                            pagerCustom: $(this).parents('.prod-slider-wrap').find('.prod-thumbs-car'),
                            adaptiveHeight: true,
                            infiniteLoop: false,
                        });
                        $(this).parents('.prod-slider-wrap').find('.prod-thumbs-car').bxSlider({
                            slideWidth: 5000,
                            slideMargin: 8,
                            moveSlides: 1,
                            infiniteLoop: false,
                            minSlides: 5,
                            maxSlides: 5,
                            pager: false,
                        });
                    });
                }
            }
        })
	});

    $('.bnt-add-to-cart').on('click', function () {
        let product_id = $(this).data("product-id");
        let quantity   = $('.input-quantity').val();
        let totalCart      = 0;
        $.ajax({
            url: '/addCartAjax',
            type: 'GET',
            dataType: 'json',
            data: {
                'product_id': product_id,
                'quantity'  : quantity
            },
            success: function (response) {
                totalCart += quantity;
                $(".total-cart").html(totalCart);
            }
        })
    });
});