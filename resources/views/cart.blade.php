@extends('layouts/app')

@section('script')
<script>
<<<<<<< HEAD
$(function(){
    $('.remove').click(function(){
        var task_id = $(this).data('id');
        var URLs="/products/list_cart";
        console.log( task_id + 'clicked');
        $.ajax({
            url: URLs,
            data: $('#tbody').serialize(),
            type:"POST",
            dataType:'json',

            success: function(msg){
                alert(msg);
            },

             error:function(xhr, ajaxOptions, thrownError){ 
                alert(xhr.status); 
                alert(thrownError); 
             }
=======

$(function() {

    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id');
        var list_cart = $.getJSON('/products/list_cart');
        console.log(id + 'clicked');
        list_cart = $.grep(list_cart, function(resp){
            return value != id;
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
        });
    });

    $.getJSON('/products/list_cart', function(resp) {
        for( var index in resp ) {
            var obj = resp[index];
<<<<<<< HEAD
            var tbody = $('#tbody tr');
            var itemID = $('<tr class=\"itemGRID\" id=\"field\""></tr>');
            var itemNB = $('<td>' + obj.id + '</td>');
            var itemNAME = $('<td>' + obj.name + '</td>');
            var itemPRICE = $('<td>' + obj.price + '</td>');

            var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");

            removeButton.click(function() {
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
            itemID.append(itemNB);
            itemID.append(itemNAME);
            itemID.append(itemPRICE);
            itemID.append(removeButton);
            $('#tbody').append(itemID);

            // $('#tbody').append('<tr><td>' + obj.id + '</td><td>'+obj.name+'</td><td>'+obj.price+'<td><button data-id="' + obj.id  + '" class="btn btn-sm btn-danger btn-det-cart">刪除物品</button></td></tr>');
        }
    });

=======
            $('#tbody').append('<tr><td>' + obj.id + '</td><td>'+obj.name+'</td><td>'+obj.price+'<td><button data-id="' + obj.id  + '" class="btn btn-sm btn-danger btn-delete">刪除物品</button></td></tr>');
        }
    });
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
});

</script>
@endsection

<<<<<<< HEAD

=======
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>購物車</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>商品名稱</th>
<<<<<<< HEAD
                    <th>價格</th>
=======
                    <th>
                        價格
                    </th>
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
                    <th>-</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
<<<<<<< HEAD

=======
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
        </table>
        <a href="/products" class="btn btn-danger">繼續購物</a>
    </div>
</div>

@endsection
