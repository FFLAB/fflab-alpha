<?php get_header(); ?>
<!--  template SINGLE.PHP -->
		<main class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">
					<!--start loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div <?php post_class('articolo'); ?>>
				<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
				<?php the_content() ?>
            <p><small>Scritto da <strong><?php the_author() ?></strong> il <?php the_time('d F Y'); ?></small></p>
				<?php the_tags(
                   "<p><small>Argomenti: ",
                    ", ",
                    "</small></p>"
                    ); ?>
                    <!--  Comments -->
						<p>Commenti: <span class="badge"><?php comments_number('0','1','%') ?></span></p>
            <?php comments_template(); ?>


				</div>
				<?php endwhile; else: ?>
                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    end loop Wordpress -->

				</div>

			</div>
		</main>

	<?php get_footer(); ?>
