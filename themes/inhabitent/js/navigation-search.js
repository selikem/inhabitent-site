(function($) {
    $(function () {

        $('.nav-search-field').hide();
        $('.search-toggle').on('click', function(event){
            event.preventDefault();
            $('.nav-search-field').toggle('medium');
            $('.nav-search-field').focus();
        });
        $('.nav-search-field').blur(function() {
            $('.nav-search-field').hide('medium');
        })
    });
})(jQuery);