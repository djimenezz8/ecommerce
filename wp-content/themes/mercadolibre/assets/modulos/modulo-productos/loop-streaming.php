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

<h3 class="fw-light mb-1 titulo-carrusel">Beneficios de Mercado Puntos</h3>
<section class="container m-0 mb-5 row">
	<?php
	$args = array(
		'posts_per_page' => 3,
		'post_type'     => 'streaming',
		'post_status'   => 'publish',
		'order' => 'ASC',
	);

	$featured_product = new WP_Query($args);
	$counter = 1; // Variable contador para el ID único

	if ($featured_product->have_posts()) {
		while ($featured_product->have_posts()) : $featured_product->the_post();
			$unique_id = 'streaming-card-' . $counter; // ID único para cada elemento
	?>
			<div class="col-12 col-sm-4 mt-3" id="<?php echo $unique_id; ?>">
				<div class="card-streaming" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
					<div class="degrade-streaming">
						<div class="contenido-streaming">
							<div class="logo-streaming">
								<?php if (get_field('imagen_streaming')) : ?>
									<img src="<?php the_field('imagen_streaming'); ?>" />
								<?php endif; ?>
							</div>
							<div class="text-streaming">
								<p class="m-0 excerpt-streaming"><?php echo get_the_excerpt(); ?></p>
								<h4 class="title-streaming"><?php echo get_the_title(); ?></h4>
							</div>
						</div>
					</div>
				</div>
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