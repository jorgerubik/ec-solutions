$(document).ready(function() {

	// Inicializamos waypoint.js:
    $('.animatedCounterOne').waypoint(function() {

    	// Inicializamos las animaciones y hacemos ajustes con animated.css
        $(this).removeClass($(this).data('fade'));
        $(this).toggleClass($(this).data('animated'));

        // Inicializamos el countTo:
        $('.timer1').countTo();
    },
        {offset: '85%', triggerOnce: true });

    // Inicializamos waypoint.js:
    $('.animatedCounterTwo').waypoint(function() {

    	// Inicializamos las animaciones y hacemos ajustes con animated.css
        $(this).removeClass($(this).data('fade'));
        $(this).toggleClass($(this).data('animated'));

        // Inicializamos el countTo:
        $('.timer2').countTo();
    },
    	// Acá indicamos a cuanto debe aparecer en la pantalla el elemento para ejecutar el waypoint.
        {offset: '85%', triggerOnce: true });
});
    