<?php get_header(); ?>
<!--    INDEX.PHP -->
		<main class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">
					<!--start loop Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('articolo'); ?>>

				<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
				<?php the_content() ?>
            <p><small>Scritto da <strong><?php the_author() ?></strong> il <?php the_time('d F Y'); ?></small></p>
				<?php the_tags(
                   "<p><small>Tags: ",
                    ", ",
                    "</small></p>"
                    ); ?>

				</div>
				<?php endwhile; else: ?>
<!-- alternative text-->
                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
                <hr>
<!--    end loop Wordpress -->

				</div>
			</div>
		</main>

	<?php get_footer(); ?>
