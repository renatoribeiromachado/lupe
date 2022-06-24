(function($) {
    "use strict";
    
    /*Altera a cor de fundo do menu atraves da classe navbar em style*/
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 145)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });
      
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });
    
    /*Contador*/
    const tempo_intervalo = 2; //ms -> define a velocidade da animação
    const tempo = 6000; //ms -> define o tempo total da animaçao

    $('.counter-up').each(function() {  
        let count_to = parseInt($(this).data('countTo'));
        let intervalos = tempo / tempo_intervalo; //quantos passos de animação tem
        let incremento = count_to / intervalos; //quanto cada contador deve aumentar
        let valor = 0;
        let el = $(this);

        let timer = setInterval(function () {
            if (valor >= count_to) { //se já contou tudo tem de parar o timer
                valor = count_to;
                clearInterval(timer);
            }

            let texto = valor.toFixed(0).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
            el.text(texto);
            valor += incremento;
        }, tempo_intervalo);
    });
   
})(jQuery);