<?php get_header(); ?>
<!--   template HOME.PHP -->
    <div class="sfondo">
		<div id="corpo" class="container">
			<div class="row">
				<div id="contenuti" class="col-md-8">
					<!--start loop-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div <?php post_class('articolo'); ?>>

<!--  class "evidenza" for sticky posts-->
				    <div class="evidenza">In evidenza</div>

            <p><small>In data <?php the_time('d F Y'); ?></small></p>
				<h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
            <p><small>Scritto da <strong><?php the_author(); ?></strong></small></p>
            <p>Categoria: <?php the_category( ' ' ); ?></p>
				<?php the_tags(
                   "<p><small>Argomenti: ",
                    ", ",
                    "</small></p>"
                    ); ?>

				</div>
				<?php endwhile; else: ?>
                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    end loop  -->

				</div>
<!--	Richiama barra laterale sidebar.php-->
            <?php get_sidebar(); ?>
	      </div>
		</div>
	</div>

	<?php get_footer(); ?>
