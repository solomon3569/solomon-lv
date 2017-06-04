@extends('layouts/app')

@section('script')
<script>
$(function(){
    $(document).on('click', '.remove', function () {

        var task_id = $(this).attr('data-id');
        var URLs ="/products/det_cart/" + task_id;

        $.ajax({
            url: URLs,
            type:"GET",
            dataType:'text',

            success: function(msg){

                if ('ok' == msg) {

                    $('#field' + task_id).remove();

                    /*$(this).parent().remove();
                    var remove = $(".itemGRID");
                    if (remove > 1) {
                        var newId = 1;
                        remove.each(function(){
                            renewId = "field" + newId;
                            $(this).attr("id",renewId);
                            newId++;
                        });
                    }*/

                    alert('success');

                }
            },

             // error:function(xhr, ajaxOptions, thrownError){ 
             //    alert(xhr.status); 
             //    alert(thrownError); 
             // }
        });
    });

    // $('.remove').click(function(){
    //     var task_id = $(this).data('id');
    //     // var path = app_path();
    //     // var path = app_path('Http/Controllers/products/det_cart/'+task_id);
    //     var URLs ="localhost:8000/products/det_cart/" + task_id;
    //     alert(URLs);
    //     console.log( task_id + 'clicked');
    //     $.ajax({
    //         url: URLs,
    //         data: $('#tbody').serialize(),
    //         type:"POST",
    //         dataType:'json',

    //         success: function(msg){
    //             alert(msg);
    //         },

    //          error:function(xhr, ajaxOptions, thrownError){ 
    //             alert(xhr.status); 
    //             alert(thrownError); 
    //          }
    //     });
    // });

    $.getJSON('/products/list_cart', function(resp) {
        for( var index in resp ) {
            var obj = resp[index];
            var tbody = $('#tbody tr ');
            var itemID = $('<tr class=\"itemGRID\" id=\"field' + obj.id + '\""></tr>');
            var itemNB = $('<td>' + obj.id + '</td>');
            var itemNAME = $('<td>' + obj.name + '</td>');
            var itemPRICE = $('<td>' + obj.price + '</td>');

            var removeButton = $('<td><button data-id="' + obj.id  + '" class="btn btn-sm btn-danger btn-det-cart remove">刪除物品</button></td>');

            /*
            removeButton.click(function() {
                alert($(this).attr('data-id'));
                $(this).parent().remove();
                var remove = $(".itemGRID");
                if (remove > 1) {
                    var newId = 1;
                    remove.each(function(){
                        renewId = "field" + newId;
                        $(this).attr("id",renewId);
                        newId++;
                    });
                }
            });
            */
            itemID.append(itemNB);
            itemID.append(itemNAME);
            itemID.append(itemPRICE);
            itemID.append(removeButton);
            $('#tbody').append(itemID);

            // $('#tbody').append('<tr><td>' + obj.id + '</td><td>'+obj.name+'</td><td>'+obj.price+'<td><button data-id="' + obj.id  + '" class="btn btn-sm btn-danger btn-det-cart">刪除物品</button></td></tr>');
        }

    });

});

</script>
@endsection


@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>購物車</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>商品名稱</th>
                    <th>價格</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>

        </table>
        <a href="/products" class="btn btn-danger">繼續購物</a>
    </div>
</div>

@endsection
