<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mercadolibre
 */

?>
<footer id="colophon" class="site-footer container-fluid p-0">
	<ul class="nav nav-tabs justify-content-center m-0">
		<li class="nav-item">
			<a class="nav-link active dropdown-toggle color-colap" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				Más información
			</a>
		</li>
		<div class="collapse col-12" id="collapseExample">
			<div class="card card-body pt-5 pb-5" id="a-footercolor">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 row widgets">
							<?php
							if (is_active_sidebar('widget_uno')) : dynamic_sidebar('widget_uno');
							endif;
							?>
							<?php
							if (is_active_sidebar('widget_dos')) : dynamic_sidebar('widget_dos');
							endif;
							?>
							<?php
							if (is_active_sidebar('widget_tres')) : dynamic_sidebar('widget_tres');
							endif;
							?>
							<?php
							if (is_active_sidebar('widget_cuatro')) : dynamic_sidebar('widget_cuatro');
							endif;
							?>
							<?php
							if (is_active_sidebar('widget_cinco')) : dynamic_sidebar('widget_cinco');
							endif;
							?>
							<?php
							if (is_active_sidebar('widget_seis')) : dynamic_sidebar('widget_seis');
							endif;
							?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</ul>
	<div class="footer-2 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-1">
					<p class="f-text1">Trabaja con nosotros</p>
				</div>
				<div class="col-12 col-sm-1">
					<p class="f-text1"> Terminos y condiciones</p>
				</div>
				<div class="col-12 col-sm-2">
					<p class="f-text1">Como cuidamos tu privacidad</p>
				</div>
				<div class="col-12 col-sm-1">
					<p class="f-text1">Accesibilidad</p>
				</div>
				<div class="col-12 col-sm-1">
					<p class="f-text1">Ayuda</p>
				</div>
			</div>
			<p class="m-0"><small class="footer-mini">Copyright © 1999-2023 MercadoLibre Chile Ltda.</small></p>
			<p class="m-0 pb-4"><small class="footer-mini">Av. Apoquindo 4800, Torre 2, piso 21, Las Condes, Santiago - Chile.</small></p>
		</div>

	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
