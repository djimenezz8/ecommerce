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
	<h3 class="fw-light mb-4 titulo-carrusel">Categorías populares</h3>
	<div id="carrusel-categoria" class="row">
		<?php
		$args = array(
			'posts_per_page' => 18,
			'post_type'     => 'categoria',
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
				<div class="col-12 slidel p-0" id="width-card">
					<div class="card-categoria">
					<?php the_field('foto_categoria');?>
					<h4 class="mt-3 titulo-categoria"><?php echo get_the_title(); ?></h4>
					</div>
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