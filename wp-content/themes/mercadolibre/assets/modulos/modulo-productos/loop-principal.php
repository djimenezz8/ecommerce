<script>
	function incrustar_hoja_estilos_comision() {
		var hoja_estilos_url =
			'<?php echo get_site_url() . '/wp-content/themes/mercadolibre/assets/modulos/modulo-productos/modulo-productos.css'; ?>';
		var hoja_estilos = document.createElement('link');
		hoja_estilos.rel = 'stylesheet';
		hoja_estilos.href = hoja_estilos_url;
		document.head.appendChild(hoja_estilos);
	}
	incrustar_hoja_estilos_comision();
</script>
<!-- #seccion 5 contenidos -->

<section class="container mb-3">
	<h3 class="fw-light mb-4 titulo-carrusel">Basado en tu última visita</h3>
	<div id="carrusel-productos" class="row">
		<?php
		$args = array(
			'posts_per_page' => 10,
			'post_type'     => 'product',
			'post_status'   => 'publish',
			// 'tax_query'     => array(
			// 	array(
			// 		'taxonomy' => 'product_visibility',
			// 		'field'   => 'name',
			// 		'terms'   => 'featured',
			// 		'operator' => 'IN',
			// 	),
			// )
		);
		$featured_product = new WP_Query($args);
		if ($featured_product->have_posts()) {
			while ($featured_product->have_posts()) : $featured_product->the_post();
		?>
				<div class="col-12 col-md-3 card slidel">
					<?php wc_get_template_part('content', 'product'); ?>
				</div>
		<?php
			endwhile;
		} else {
			echo __('Lo sentimos no hay productos');
		}
		wp_reset_postdata();
		?>
	</div>
</section>
<!------seccion contacto---->


<!-- #seccion 5 contenidos -->