jQuery(function ($) {
    // Selecciona el elemento con el ID "carrusel-productos" y llama al método "slick" para inicializar el carrusel
    $('#carrusel-productos').slick({
        slidesToShow: 5, // Número de diapositivas a mostrar en cada paso
        slidesToScroll: 5, // Número de diapositivas a desplazar en cada paso
        autoplay: true, // Activar reproducción automática
        autoplaySpeed: 2000, // Velocidad de reproducción automática en milisegundos (2 segundos en este caso)
        arrows: true, // Mostrar flechas de navegación
        dots: false, // Mostrar puntos de navegación
        pauseOnHover: true, // Pausar reproducción automática al pasar el cursor sobre el carrusel
        responsive: [
            {
                breakpoint: 991, // Punto de quiebre de 991 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 3 // Número de diapositivas a mostrar en este punto de quiebre
                }
            },
            {
                breakpoint: 768, // Punto de quiebre de 768 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 2 // Número de diapositivas a mostrar en este punto de quiebre
                }
            },
            {
                breakpoint: 375, // Punto de quiebre de 375 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 1 // Número de diapositivas a mostrar en este punto de quiebre
                }
            }
        ]
    });
    $('#carrusel-categoria').slick({
        slidesToShow: 6, // Número de diapositivas a mostrar en cada paso
        slidesToScroll: 6, // Número de diapositivas a desplazar en cada paso
        rows: 2, //Número de filas
        autoplay: false, // Activar reproducción automática
        autoplaySpeed: 2000, // Velocidad de reproducción automática en milisegundos (2 segundos en este caso)
        arrows: true, // Mostrar flechas de navegación
        dots: false, // Mostrar puntos de navegación
        pauseOnHover: true, // Pausar reproducción automática al pasar el cursor sobre el carrusel
        responsive: [
            {
                breakpoint: 991, // Punto de quiebre de 991 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 3 // Número de diapositivas a mostrar en este punto de quiebre
                }
            },
            {
                breakpoint: 768, // Punto de quiebre de 768 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 2 // Número de diapositivas a mostrar en este punto de quiebre
                }
            },
            {
                breakpoint: 375, // Punto de quiebre de 375 píxeles de ancho de la pantalla
                settings: {
                    slidesToShow: 1 // Número de diapositivas a mostrar en este punto de quiebre
                }
            }
        ]
    });
    $(".dropdown-toggle").click(function () {
        if ($(this).hasClass("color-changed")) {
            $(this).css("background-color", "");
            $(this).removeClass("color-changed");
        } else {
            $(this).css("background-color", "#ebebeb");
            $(this).addClass("color-changed");
        }
    });
    $("article").each(function () {
        $(this).parent().addClass("container");
    });
    $("div.woocommerce-product-gallery").each(function () {
        $(this).parent().removeClass("product");
    });
    $("div.woocommerce-product-gallery").each(function () {
        $(this).parent().addClass("row");
    });
    $("div.woocommerce-product-gallery").each(function () {
        $(this).addClass("col-10 col-sm-8 row d-flex");
    });
    $("div.summary").each(function () {
        $(this).addClass("col-10 col-sm-4");
    });
    $(".woocommerce-cart-form").each(function () {
        $(this).parent().addClass("row justify-content-center");
    });
    $('.cart-collaterals').css('width', '');
    $('.product-name').children('a').addClass('nombre-producto-carrito');
    $(".cart_totals h2").remove();
    $(".cart_totals").first().before(" <h3 class='titulo-resumen-compra m-2 mt-3 mb-3'>Resumen de productos</h3> "); 
    $(".cart-subtotal th").remove();
    $(".cart-subtotal").prepend("<th class='fw-normal producto-resumen m-0'>Producto</th>")
});

