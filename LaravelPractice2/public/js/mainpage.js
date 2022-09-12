$(document).ready(function(){

    $(document).on('click','.add_to_cart',function (e){
        e.preventDefault();
        $.ajax({
            url: '/add_to_cart',
            type : 'GET',
            data: {
                id : $(this).data('product_id'),
                product_count: 1
            },
            success:function (){
                var cookie = document.cookie.match('user_id');
                alert(cookie);
                alert("product added succesfully!");
            },
            error:function (error){
                alert(error);
            }
        })

    })

});
