<?php get_header(); ?>
<!--  template HOME.PHP -->
    <div class="sfondo">
		<div id="corpo" class="container">
			<div class="row">
				<div id="contenuti" class="col-md-8">
					<!--inizio loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('articolo'); ?>>
<!-- class "evidenza" for sticky posts-->
				    <div class="evidenza">In evidenza</div>
<!-- date post -->
            <p><small>In data <?php the_time('d F Y'); ?></small></p>
				<h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
				<?php the_content() ?>
<!-- author name -->
            <p><small>Scritto da <strong><?php the_author_posts_link(); ?></strong></small></p>
            <p>Categoria: <?php the_category( ' ' ); ?></p>
				<?php the_tags(
                   "<p><small>Argomenti: ", //before tags
                    ", ",   //tags separator
                    "</small></p>"  //after tags
                    ); ?>

				</div>
				<?php endwhile; else: ?>
<!-- fallback message -->
                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    End loop Wordpress -->

				</div>

<!--sidebar.php-->
            <?php get_sidebar(); ?>



			</div>
		</div>
	</div>

	<?php get_footer(); ?>
