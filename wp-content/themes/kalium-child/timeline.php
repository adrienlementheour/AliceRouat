<?php
/*
	Template Name: Timeline
*/
/**
 *	Kalium WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */
 
global $post;

the_post();

get_header();

$is_vc_container = preg_match( "/\[vc_row.*?\]/i", $post->post_content );

if( ! empty( $post->post_password ) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) {
		
	$is_vc_container = false;
}

# Page Title (Show or Hide)
$show_title = $is_vc_container == false && is_singular();

if( function_exists( 'is_woocommerce' ) )
{
	if( is_account_page() || is_checkout() )
	{
		$show_title = false;
	}
}

?>
<div class="<?php echo $is_vc_container ? 'vc-container' : 'container default-margin'; ?>">
	
	<?php if( $show_title ): ?>
	<h1 class="wp-page-title"><?php the_title(); ?></h1>
	<?php endif; ?>
	
	<?php the_content(); ?>

	<?php $loop = new WP_Query(array('post_type' => 'date', 'posts_per_page' => -1)); ?>
	<?php if($loop->have_posts()) : ?>
		<ul id="timeline-custom">
			<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<li data-sr>
				<div class="content-timeline">
					<div class="wrapper-bloc-timeline">
						<div class="header-bloc-timeline">
							<?php the_field('annee'); ?>
						</div>
						<div class="content-bloc-timeline">
							<?php the_field('diplome'); ?>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
			<!--
			<li>
				<div class="content-timeline">
					2015 <br />
					Créatif/Chargée de projets culturels/ Chargée de com - Mille au carré - Rennes
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2014 <br />
					Service civique - Mille au carré - Rennes
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2013 <br />
					Co-Création de l'association Mille au carré
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2013 <br />
					Stage Communication - Ay-roop - Rennes
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2013 <br />
					Stage Communication - Le Triangle, cité de la danse - Rennes
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2013 <br />
					Master 2 Créateur de Produit multimédia et management - Université Rennes 2
				</div>
			</li>
			<li>
				<div class="content-timeline">
					2011<br />
					DNAP Ecole supérieure d'arts et média de Caen
				</div>
			</li>-->
			
		</ul>
	<?php endif; wp_reset_query(); ?>
</div>

<?php

get_footer();

echo "<script> 
	var config = {
		easing: 'hustle',
		move: '10px',
		over: '0.3s',
	    scale: { direction: 'up', power: '0%' },
	    reset: true,
	    vFactor: '0.50',
	    wait: '0.5s',
	    delay: 'onload'
	}
	window.sr = new scrollReveal( config );
</script>";