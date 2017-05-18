@extends('layouts/app')

@section('script')
<script>

$(function() {

    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id');
        var list_cart = $.getJSON('/products/list_cart');
        console.log(id + 'clicked');
        list_cart = $.grep(list_cart, function(resp){
            return value != id;
        });
    });

    $.getJSON('/products/list_cart', function(resp) {
        for( var index in resp ) {
            var obj = resp[index];
            $('#tbody').append('<tr><td>' + obj.id + '</td><td>'+obj.name+'</td><td>'+obj.price+'<td><button data-id="' + obj.id  + '" class="btn btn-sm btn-danger btn-delete">刪除物品</button></td></tr>');
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
                    <th>
                        價格
                    </th>
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
