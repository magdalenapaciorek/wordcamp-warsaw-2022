<?php
get_header();

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( is_singular() ) : ?>
					<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
				<?php else : ?>
					<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php endif; ?>

				<?php the_post_thumbnail( 'full' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer class="entry-footer default-max-width">
				<span class="posted-on">
					<?php
						echo sprintf(
							'<time class="entry-date published updated" datetime="%1$s">%2$s</time>',
							esc_attr( get_the_date( DATE_W3C ) ),
							esc_html( get_the_date() )
						);
					?>
				</span>
			</footer><!-- .entry-footer -->
	<?php }

	// Previous/next page navigation.
	the_posts_pagination();

} else { 
?>

	<article class="post error">
		<p class="404"><?php esc_html_e( 'Nothing has been posted like that yet', 'wordcamp' ); ?></p>
	</article>

<?php 
}

get_footer();