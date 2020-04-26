$(document).ready( function() {
    $('.update').on('click', function() {
        var id = $(this).attr("data-id");
        console.log(id);
        $.post('update.php', { id:id })
            .done(function (objet) {
                var product = JSON.parse(objet);
                $('#test').val('update');
                $('#pk').val(product.pk);
                $('#name').val(product.name);
                $('#price').val(product.price);
                $('#quantity').val(product.quantity);
            });
    });
});


