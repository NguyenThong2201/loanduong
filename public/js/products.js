$(document).ready(function () {
	$('.qview-btn').on('click', function () {
		let product_id = $(this).data("product-id");
		$.ajax({
            url: '/getDetailAjax',
            type: 'GET',
            data: {
                'product_id': product_id
            },
            success: function (response) {
                console.log(response);
                let html = '';
                html += '<a href="product.html">' +
                    '       <h1 class="main-ttl">' +
                    '         <span>'+ response.title +'</span>' +
                    '       </h1>' +
                    '    </a>' +
                    '    <div class="prod-slider-wrap">' +
                    '        <div class="prod-slider">' +
                    '          <ul class="prod-slider-car">' +
                    '             <li>' +
                    '                 <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">\n' +
                    '                     <img src="http://placehold.it/500x525" alt="">' +
                    '                 </a>' +
                    '              </li>' +
                    '         </ul>' +
                    '       </div>' +
                    '    </div>' +
                    '    <div class="prod-cont">' +
                    '       <p class="prod-actions">' +
                    '           <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>\n' +
                    '           <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>' +
                    '       </p>' +
                    '       <div class="prod-skuwrap">' +
                    '           <p class="prod-skuttl">Color</p>' +
                    '                <ul class="prod-skucolor">' +
                    '                    <li class="active">' +
                    '                        <img src="/home/img/color/blue.jpg" alt="">' +
                    '                    </li>' +
                    '                    <li>' +
                    '                        <img src="/home/img/color/red.jpg" alt="">' +
                    '                    </li>' +
                    '                    <li>' +
                    '                        <img src="/home/img/color/green.jpg" alt="">' +
                    '                    </li>' +
                    '                    <li>' +
                    '                        <img src="/home/img/color/yellow.jpg" alt="">' +
                    '                    </li>' +
                    '                    <li>' +
                    '                        <img src="/home/img/color/purple.jpg" alt="">' +
                    '                    </li>' +
                    '                 </ul>' +
                    '                 <p class="prod-skuttl">Sizes</p>' +
                    '                 <div class="offer-props-select">' +
                    '                     <p>XL</p>' +
                    '                     <ul>' +
                    '                         <li><a href="#">XS</a></li>' +
                    '                         <li><a href="#">S</a></li>' +
                    '                         <li><a href="#">M</a></li>' +
                    '                         <li class="active"><a href="#">XL</a></li>' +
                    '                         <li><a href="#">L</a></li>' +
                    '                         <li><a href="#">4XL</a></li>' +
                    '                         <li><a href="#">XXL</a></li>' +
                    '                      </ul>' +
                    '                    </div>' +
                    '                    </div>' +
                    '                    <div class="prod-info">\n' +
                    '                        <p class="prod-price">\n' +
                    '                            <b class="item_current_price">$238</b>\n' +
                    '                        </p>\n' +
                    '                        <p class="prod-qnt">\n' +
                    '                            <input type="text" value="1">\n' +
                    '                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>\n' +
                    '                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>\n' +
                    '                        </p>\n' +
                    '                        <p class="prod-addwrap">\n' +
                    '                            <a href="#" class="prod-add">Add to cart</a>\n' +
                    '                        </p>\n' +
                    '                    </div>\n' +
                    '                    <ul class="prod-i-props">\n' +
                    '                        <li>\n' +
                    '                            <b>SKU</b> 05464207\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Manufacturer</b> Mayoral\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Material</b> Cotton\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Pattern Type</b> Print\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Wash</b> Colored\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Style</b> Cute\n' +
                    '                        </li>\n' +
                    '                        <li>\n' +
                    '                            <b>Color</b> Blue, Red\n' +
                    '                        </li>\n' +
                    '                        <li><a href="#" class="prod-showprops">All Features</a></li>\n' +
                    '                    </ul>\n' +
                    '                </div>';
                $(".modal-quick-view-detail").html(html);
            }
        })
	});
});