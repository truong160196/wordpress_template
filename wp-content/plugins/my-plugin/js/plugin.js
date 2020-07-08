var url_base = window.location.origin;

$(function() {
    'use strict';
    
    $(document).on('submit', '#product-form', function(e) {
        e.preventDefault();

        createNewProduct();
    });

    function createNewProduct() {
        $.ajax({
            url: url_base + "/wp-json/product/v1/create",
            type: "POST",
            data: $('#product-form').serialize(),
            success: function(response) {
                notification('Success!!!', response.message).success();
                resetForm();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                var message = "Can not save product";

                if (jqXHR && jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                    message = jqXHR.responseJSON.errors;
                }
                notification('Error!!!', message).error();
            }
        });
    }

    $( document ).ready(function() {
        var searchParam = new URLSearchParams(window.location.search);

        var typeScreen = searchParam.get('type');
        var product_id = searchParam.get('id');

        if (typeScreen === 'edit' && product_id) {
            getDetailProduct(product_id);
        }

        if (typeScreen === 'new') {
            $('#actions').val('new');
        }
    });

    function getDetailProduct(id) {
        $.ajax({
            url: url_base + "/wp-json/product/v1/detail?id=" + id,
            type: "GET",
            success: function(response) {
                console.log(response);
                if (response) {
                    setInfoToForm(response);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                var message = "Can not get detail product";

                if (jqXHR && jqXHR.responseJSON && jqXHR.responseJSON.errors) {
                    message = jqXHR.responseJSON.errors;
                }
                notification('Error!!!', message).error();
            }
        });
    }

    function resetForm() {
        $('#product-form').trigger("reset");
    }

    function setInfoToForm(data) {
        $('#actions').val('edit');
        $('#id').val(data.id);
        $('#title').val(data.title);
        $('#description').val(data.description);
        $('#platform').val(data.platform);
        $('#delivery_method').val(data.delivery_method);
        $('#seller_send_in_time').val(data.seller_send_in_time);
        $('#seller_send_in_type').val(data.seller_send_in_type);
        $('#region').val(data.region);
        $('#returns').val(data.returns);
        $('#accept_currency').val(data.accept_currency);
        $('#protection').val(data.protection);
        $('#type_product').val(data.type_product);
        $('#category').val(data.category);
        $('#author').val(data.author);
        $('#avatar').val(data.avatar);
        $('#image_1').val(data.image_1);
        $('#image_2').val(data.image_2);
        $('#image_3').val(data.image_3);
        $('#price').val(data.price);
        $('#fee').val(data.fee);
        $('#qty').val(data.qty);
        $('#status').val(data.status);
    }
});