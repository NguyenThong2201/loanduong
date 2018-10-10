$(document).ready(function () {
    $('.qview-btn').on('click', function () {
        let product_id = $(this).data('product-id');
        $.ajax({
            url: '/kanri/rating/comment/delete',
            type: 'POST',
            data: {
                'product_id': product_id
            },
            success: function (response) {
                pages.common.hideLoading();
                if( response.error != 0 ){
                    var t = $('#tenpo_rating_list_tbl').DataTable();
                    t.draw();
                    $('#modal-reply-comment').modal('hide');
                }
            },
            error: function(){
                pages.common.hideLoading();
            }
        })
    });
});