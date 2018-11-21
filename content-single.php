<?php
/**
 * The template for displaying single posts
 *
 * @package Poseidon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php poseidon_post_image_single(); ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php poseidon_entry_meta(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<br>
		<?php if(get_post_meta($post->ID, 'wpcf-workout-date', true) || 
			 get_post_meta($post->ID, 'wpcf-qic', true) || 
			 get_post_meta($post->ID, 'wpcf-the-pax', true)
			 ): ?>

		<div style="padding:10px 15px 0 15px; border:1px dotted #eee; background:#c9dce8;">
			<ul>
				<?php if(get_post_meta($post->ID, 'wpcf-workout-date', true)): ?>
				<li><strong> When: </strong>	<?php echo get_post_meta( $post->ID, 'wpcf-workout-date', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-qic', true)): ?>
				<li><strong> QIC: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-qic', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-the-pax', true)): ?>
				<li><strong> The Pax: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-the-pax', true ); ?></li>
				<?php endif; ?>
				<li><strong> The Pax: </strong> <?php poseidon_entry_tags(); ?>
			<ul>
		</div>
		
		<?php endif; ?>


		<?php if(get_post_meta($post->ID, 'wpcf-what', true) || 
			 get_post_meta($post->ID, 'wpcf-where', true) || 
			 get_post_meta($post->ID, 'wpcf-when', true) ||
			 get_post_meta($post->ID, 'wpcf-who', true) ||
			 get_post_meta($post->ID, 'wpcf-weather', true) ||
			 get_post_meta($post->ID, 'wpcf-why', true) ||
			 get_post_meta($post->ID, 'wpcf-preview', true)
			 ): ?>
		
			<ul>
				<?php if(get_post_meta($post->ID, 'wpcf-what', true)): ?>
				<li><strong> WHAT: </strong>	<?php echo get_post_meta( $post->ID, 'wpcf-what', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-where', true)): ?>
				<li><strong> WHERE: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-where', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-when', true)): ?>
				<li><strong> WHEN: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-when', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-who', true)): ?>
				<li><strong> WHO: </strong>	<?php echo get_post_meta( $post->ID, 'wpcf-who', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-weather', true)): ?>
				<li><strong> WEATHER: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-weather', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-why', true)): ?>
				<li><strong> WHY: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-why', true ); ?></li>
				<?php endif; ?>

				<?php if(get_post_meta($post->ID, 'wpcf-preview', true)): ?>
				<li><strong> PREVIEW: </strong>	<?php echo get_post_meta( get_the_ID(), 'wpcf-preview', true ); ?></li>
				<?php endif; ?>
			<ul>
		
		<br>
		<br>
		<?php endif; ?>
		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'poseidon' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php poseidon_entry_tags(); ?>
		<?php do_action( 'poseidon_author_bio' ); ?>
		<?php poseidon_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>
