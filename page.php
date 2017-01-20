<?php get_header(); ?>
<!--   TEMPLATE FRONT-PAGE.PHP  -->
    <div class="sfondo">
		<div id="corpo" class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">
					<!--start loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post_class() stampa una serie di classi generate da Wordpress per stilizzare nel dettaglio varie tipologie di articolo, passando un argomento posso aggiungere delle mie classi-->
				<div <?php post_class('articolo'); ?>>

				<?php the_content() ?>
				</div>
				<?php endwhile; else: ?>

                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    end loop-->

				</div>

			</div>
		</div>
	</div>

	<?php get_footer(); ?>
