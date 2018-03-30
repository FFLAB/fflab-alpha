<?php get_header(); ?>
<!--  template SINGLE-TEST.PHP -->
		<main class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">
					<!--start loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



				<div <?php post_class('articolo'); ?>>
		<?php
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <h2 <?php echo 'class="bigtitle" style="background: url('. $url.');"'; ?>>

        <?php the_title(); ?></h2>
				<?php the_content() ?>
            <p><small>Scritto da <strong><?php the_author_posts_link(); ?></strong> il <?php the_time('d F Y'); ?></small>
				<?php the_tags(
                   "<small> | <strong>Tags:</strong> ",
                    ", ",
                    "</small>"
                    ); ?>
                    <!-- visualizzo il numero dei commenti -->
						<p><strong>Commenti:</strong> <span class="badge"><?php comments_number('0','1','%') ?></span></p>
<!-- Carico il template dei commenti, se non è presente comments.php Wordpress carica un suo template predefinito-->
            <?php comments_template(); ?>


				</div>
				<?php endwhile; else: ?>
<!-- testo visualizzato solo se il loop non trova elementi-->
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
