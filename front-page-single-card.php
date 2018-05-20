<?php get_header(); ?>
<!--   TEMPLATE FRONT-PAGE.PHP card -->
		<main class="container-fluid">
				<div class="contenitore">
<!--
 <div class="card">
            <div class="card-header">Titolo</div>
            <div class="card-body"><img src="foto/IMG_0002-1000.jpg" alt=""></div>
        </div>
-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('card'); ?>>
				<div class="card-header">
				<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
				<!-- immagine in evidenza -->
                <a href="<?php the_permalink(); ?> ">
									<?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?>
								</a>
                </div>
                <div class="card-body">
				<?php the_excerpt() ?>
    	         <a href="<?php the_permalink(); ?>"><span class="readmore">Continua a leggere &raquo;</span></a>
                  </div>
                </div>

				<?php endwhile; else: ?>

                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>

<div class="navigation text-center"><?php pagination_nav(); ?></div>

		</div>
		</main>

	<?php get_footer(); ?>
