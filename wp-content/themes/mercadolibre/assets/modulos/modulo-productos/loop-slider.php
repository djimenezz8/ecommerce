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
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-pause="hover">
	<div class="carousel-inner">
		<?php
		$i = 0;
		$e = 0;
		$temp = $wp_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$post_per_page = 4; // -1 shows all posts
		$args = array(
			'post_type' => 'slider',
			'orderby' => '1',
			'order' => 'ASC',
			'paged' => $paged,
			'posts_per_page' => $post_per_page,
			// 'tax_query' => array(
			// 	array(
			// 		'taxonomy' => 'categoria-musica',
			// 		'field'    => 'slug',
			// 		'terms'    => 'Enfoque',
			// 	),
			// ),
		);
		$wp_query = new WP_Query($args);
		if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="carousel-item <?php if ($i == 0) {
												echo "active";
											}; ?>">
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="d-block w-100 h-100" alt="">
				</div>
				<?php endwhile; ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
</button>

<?php else : ?>
	<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
		wp_reset_query();
		$wp_query = $temp ?>
</div>