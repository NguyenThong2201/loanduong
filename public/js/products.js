$(document).ready(function () {
	$('.qview-btn').on('click', function () {
		var product_id = $(this).attr("data-product-id");
		$.ajax({
            url: '/getDetailAjax',
            type: 'POST',
            dataType: 'json',
            data: {
                product_id: product_id,
            }
        }).done(function(data) {
        	console.log(data);
            $('#noidung').html(ketqua);
        });
	});
});