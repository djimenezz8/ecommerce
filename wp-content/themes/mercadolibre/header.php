<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mercadolibre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header pt-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-4 col-sm-2">
            <?php the_custom_logo(); ?>
          </div>
          <div class="col-5 col-sm-6">
            <?php aws_get_search_form(true); ?>
          </div>
          <div class="col-12 col-sm-4 text-end medq-disney">
            <img class="disney" src="http://localhost:8888/ecommerce/wp-content/uploads/2023/06/disney.webp" alt="Disney" />
          </div>
          <nav class="navbar navbar-expand-lg col-2 col-sm-12">
            <div class="container">
              <div class="row col-12">
                <div class="col-2 col-sm-2">
                  <div class="ancho-ubi  ubicacion d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                      <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <p class="m-0 ms-1 fw-lighter">Ingresa tu<br><span class="tu-ubicacion fw-normal">ubicación</span></p>
                  </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-12 col-sm-10">
                  <div class="row justify-content-between prem">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Mercado Libre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <?php
                        if (is_active_sidebar('menu_personalizado2')) : dynamic_sidebar('menu_personalizado2');
                        endif;
                        ?>
                        <div class="col-12 col-sm-6 nav-2">
                          <?php
                          wp_nav_menu(
                            array(
                              'theme_location' => 'menu-1',
                              'menu_id'        => 'menuml',
                              'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0 ms-0',
                              'link_class'     => 'item',
                            )
                          );
                          ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </nav>
          <hr class="ubicacion-2 mt-2 mb-1">
          <div class="ubicacion-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
            <p class="m-0 ms-2"><small class="subtitulo"> Ingresa tu ubicación </small></p>
          </div>
        </div>

      </div>
    </header><!-- #masthead -->
  </div>
