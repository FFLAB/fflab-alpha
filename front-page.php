<?php get_header(); ?>
<!--   TEMPLATE FRONT-PAGE.PHP v. row -2 -->
		<main class="container">
			<div class="row">
<!--				<div class="col-md-12">-->
<!--                <div class="row">-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div <?php post_class('articolo col-md-4'); ?>>
				<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
				<!-- immagine in evidenza -->
                <a href="<?php the_permalink(); ?> ">
									<?php the_post_thumbnail('full',array('class' => 'img-responsive')); ?>
								</a>

				<?php the_excerpt() ?>
    	         <a href="<?php the_permalink(); ?>"><span class="readmore">Continua a leggere &raquo;</span></a>
                  <hr>
                </div>
<!--				</div>-->
				<?php endwhile; else: ?>

                <div class="articolo">
                    <h2>Attenzione!</h2>
                    <p>Nessun elemento trovato</p>
                </div>
                <?php endif; ?>

<div class="navigation text-center"><?php pagination_nav(); ?></div>
<!--                    </div>-->
				</div>
		</main>

	<?php get_footer(); ?>
