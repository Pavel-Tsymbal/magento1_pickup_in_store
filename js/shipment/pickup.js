(function ($) {
    $(document).ready(function () {
        $("body").on('click', '#pickup', function () {
            $('#select_store').attr('name', 'shipping_method');
            $('.select_store').removeProp('style');
        });
    });
})(jQuery);

(function ($) {
    $(document).ready(function () {
        $("body").on('click', '.radio', function (event) {
            if (event.target.id != 'pickup') {
                $('#select_store').removeProp('name');
                $('.select_store').attr('style','display: none');
            }
        });
    });
})(jQuery);