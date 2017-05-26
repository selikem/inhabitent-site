jQuery(function () {

    jQuery('.search-field').hide();
    jQuery('.search-toggle').on('click', function(event){
        event.preventDefault();
        jQuery('.search-field').toggle('fast');
    });
});