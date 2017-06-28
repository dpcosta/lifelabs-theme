/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
function collapseNavbar() {

    if ($(".navbar").offset().top > 300) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-custom a").addClass("menu-item-collapse");
        $(".navbar-brand>img").show();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-custom a").removeClass("menu-item-collapse");
        $(".navbar-brand>img").hide();
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.navbar-nav a').addClass('page-scroll');
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
    $('#carouselDiaDeCoach .item').first().addClass("active");
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(".navbar-collapse").collapse('hide');
    $('nav').removeClass("navbar-collapse-in");
});

$('.navbar-toggle').click(function(){
    var nav = $('nav');
    if (nav.hasClass('navbar-collapse-in'))  {
        nav.removeClass("navbar-collapse-in");
        $('#logo').hide();
    } else {
        nav.addClass("navbar-collapse-in");
        $('#logo').show();
    }
    
});


$('#message-form > button').click(function(){

    //console.log('Chegou aqui');

    var data = {
        action: 'mail_before_submit',
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