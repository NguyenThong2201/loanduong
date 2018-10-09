$(document).ready(function () {
	$('.qview-btn').on('click', function () {
		var product_id = $(this).data("product-id");
		$.ajax({
            url: '/getDetailAjax',
            type: 'GET',
            data: {
                'product_id': product_id
            },
            success: function (response) {
                pages.common.hideLoading();
            },
            error: function(){
                pages.common.hideLoading();
            }
        })
	});
});