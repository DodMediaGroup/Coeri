jQuery(document).ready(function($) {

    //slider

     $('.slider').fractionSlider({
        'fullWidth':            true,
        'controls':             true, 
        'pager':                false,
        'responsive':           true,
        'dimensions':           "1600,400",
        'increase':             false,
        'pauseOnHover':         false
    });

      var altura =$('.content-header').offset().top;

    $(window).on('scroll', function(){
        if($(window).scrollTop() > altura){
            $('.btn-up').addClass('btn-back')
        }else{
             $('.btn-up').removeClass('btn-back')
        }
    });

    // My Fuctions
    $('div.menu-bars').click (function() {
        event.preventDefault();
        $('#principal-menu').toggleClass('active');
    });
	$('.js-resizing').each(function(index, el) {
        $.resizing($(this));
    });

    $('.btn-menu').on('click', function(event) {
        event.preventDefault();
        if($($(this).attr('data-menu')).hasClass('active'))
            $($(this).attr('data-menu')).removeClass('active');
        else
            $($(this).attr('data-menu')).addClass('active');
    });

    $('.to-svg').each(function(index, el) {
        $.imgToSvg($(this));
    });
    $('.form__ajax').on('submit', function(event) {
        event.preventDefault();

        $.activeLoading();
        $form = $(this);

        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            dataType: 'json',
            data: $form.serialize(),
        })
        .done(function(data) {
            $.showMessage(data.message);
        })
        .fail(function() {
            $.showMessage('Fallo durante la conexión al servidor. Intente mas tarde');
        })
        .always(function() {
            $.deactiveLoading();
        });
        
    });
});

$.resizing = function(element){
    $(window).resize(function() {
        var width = element.outerWidth();
        element.css({
            "height": width * eval(element.attr('data-resizing'))
        });
        if(element.hasClass('panel')){
            element.parent().find('.panel').css({
                "height": width * eval(element.attr('data-resizing'))
            });
        }
    }).resize();
}

$.imgToSvg = function(image){
    var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);

        if($img.hasClass('map-animate'))
            $.myScrollAnimate();
    }, 'xml');
}

$.runSlider = function($slider){
    $slider.fractionSlider({
        'controls': false,
        'pager': false
    });
}
    
