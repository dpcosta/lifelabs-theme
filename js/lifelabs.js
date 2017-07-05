/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
function collapseNavbar() {

    if (jQuery(".navbar").offset().top > 300) {
        jQuery(".navbar-fixed-top").addClass("top-nav-collapse");
        jQuery(".navbar-custom a").addClass("menu-item-collapse");
        jQuery(".navbar-brand>img").show();
    } else {
        jQuery(".navbar-fixed-top").removeClass("top-nav-collapse");
        jQuery(".navbar-custom a").removeClass("menu-item-collapse");
        jQuery(".navbar-brand>img").hide();
    }
}

jQuery(window).scroll(collapseNavbar);
jQuery(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
    jQuery('.navbar-nav a').addClass('page-scroll');
    jQuery('a.page-scroll').bind('click', function(event) {
        var $anchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: jQuery($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    jQuery('#carouselDiaDeCoach .item').first().addClass("active");
});

// Closes the Responsive Menu on Menu Item Click
jQuery('.navbar-collapse ul li a').click(function() {
    jQuery(".navbar-collapse").collapse('hide');
    jQuery('nav').removeClass("navbar-collapse-in");
});

jQuery('.navbar-toggle').click(function(){
    var nav = jQuery('nav');
    if (nav.hasClass('navbar-collapse-in'))  {
        nav.removeClass("navbar-collapse-in");
        jQuery('#logo').hide();
    } else {
        nav.addClass("navbar-collapse-in");
        jQuery('#logo').show();
    }
    
});


jQuery('#message-form > button').click(function(){

    //console.log('Chegou aqui');

    var data = {
        action: 'mail_before_submit',
        toname: $('#nome-contato').val(),
        toemail: $('#email-contato').val(), 
        mensagem: $('#mensagem-contato').val(),
        _ajax_nonce: $('#my_email_ajax_nonce').data('nonce'),
    };

    //console.log(data);

    $.post(
        window.location.href + "/wp-admin/admin-ajax.php", 
        data, 
        function(response) {
            console.log('Got this from the server: ' + response);
            if (response == 'email enviado') {
                alert('Email enviado com sucesso!');
            }
        }
    );

});