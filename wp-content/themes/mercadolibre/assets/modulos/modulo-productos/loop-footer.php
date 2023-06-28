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

<section class="container m-0 row">
	<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type'     => 'footer',
		'post_status'   => 'publish',
		'order' => 'ASC',
	);

	$featured_product = new WP_Query($args);
	$counter = 1; // Variable contador para el ID único

	if ($featured_product->have_posts()) {
		while ($featured_product->have_posts()) : $featured_product->the_post();
			$unique_id = 'a-footer-img-' . $counter; // ID único para cada elemento
	?>
			<div class="col-12 col-sm-4 mt-5 mb-5 a-footer-card" id="<?php echo $unique_id; ?>">
			<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="a-footer-img mb-1" alt="">
			<h5 class="fw-light mt-3"><?php echo get_the_title();?></h5>
			<p><small class="subtitulo"><?php echo get_the_excerpt();?></small></p>
			</div>
	<?php
			$counter++; // Incrementar el contador en cada iteración
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