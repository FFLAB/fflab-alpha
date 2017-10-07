<?php get_header(); ?>
<!--   sono il template HOME.PHP -->
    <div class="sfondo">
		<div id="corpo" class="container">
			<div class="row">
				<div id="contenuti" class="col-md-8">
					<!--inizio loop di Wordpress -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post_class() stampa una serie di classi generate da Wordpress per stilizzare nel dettaglio varie tipologie di articolo, passando un argomento posso aggiungere delle mie classi-->
				<div <?php post_class('articolo'); ?>>
<!--  La class "evidenza" sarà solo sugli articoli sticky (vedi CSS)-->
				    <div class="evidenza">In evidenza</div>
<!-- visualizzo data creazione articolo/pagina -->
            <p><small>In data <?php the_time('d F Y'); ?></small></p>
				<h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h3>
				<?php the_content() ?>
<!-- visualizzo il nome dell'autore -->
            <p><small>Scritto da <strong><?php the_author() ?></strong></small></p>
            <p>Categoria: <?php the_category( ' ' ); ?></p>
				<?php the_tags(
                   "<p><small>Argomenti: ", //prima dei tags
                    ", ",   //separatore dei tags
                    "</small></p>"  //dopo i tags
                    ); ?>
				
				</div>
				<?php endwhile; else: ?>
<!-- testo visualizzato solo se il loop non trova elementi-->
                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>
<!--    Fine loop Wordpress -->

				</div>
				
<!--	Richiama barra laterale sidebar.php-->
            <?php get_sidebar(); ?>
				
				
				
			</div>
		</div>
	</div>

	<?php get_footer(); ?> 


















