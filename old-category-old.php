<?php get_header(); ?>
<!--   template CATEGORY.PHP -->
  
		<main class="container">
			<div class="row">
				<div id="contenuti" class="col-md-12">
					<!--start loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('articolo'); ?>>
<!-- visualizzo data creazione articolo/pagina -->
				<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
				<?php the_content() ?>
<!-- visualizzo il nome dell'autore -->
            <p><small>Scritto da <strong><?php the_author() ?> il <?php the_time('d F Y'); ?></strong></small></p>
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
<!--    end loop Wordpress -->
                <!-- navigation pages-->
                <div class="navigation text-center"><?php pagination_nav(); ?></div>

				</div>
					
			</div>
		</main>


	<?php get_footer(); ?> 