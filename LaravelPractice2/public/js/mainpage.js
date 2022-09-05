$(document).ready(function(){

    $(document).on('click','.add_to_cart',function (e){
        e.preventDefault();
        $.ajax({
            url: '/add_to_cart',
            type : 'GET',
            data: {
                id : $(this).data('id')
            },
            success:function (){
                alert("product added succesfully!");
            }
        })

    })

});
