$(document).ready(function () {

    //Hacer scroll a un elemento hacerscroll('#ejemplo) onclick="hacerscroll('#scroll-2')"
    function hacerscroll(hash) {
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 120
        }, 800, function () {

        });
    };

    // Autopadding navbar

    $('.division-nav-design').css('padding-top', $('.navbar').outerHeight());

})