jQuery(document).ready(function($) {

    //tooltips
    $('div.messages:first').before('<a href="#" class="closer" title="Close" style="float: right">x</a>');
    $('.closer').click(function() {
        $('#messages-wrapper').animate({"height": "hide"}, 350);
    });

    //overlay
    $('#main-content').before('<div id="load-overlay" style="height: 250%"></div>');
    $(window).load(function() {
        $('#load-overlay').fadeOut(1200);
    });

    // color box UI improv
    $('#cboxOverlay').mouseenter(function() {
            $('#cboxClose').css('background-position', '0 -63px')
        }
    );
    $('#cboxOverlay').mouseout(function() {
            $('#cboxClose').css('background-position', '0 0')
        }
    );

});
