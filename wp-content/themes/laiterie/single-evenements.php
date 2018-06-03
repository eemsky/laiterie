<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article class="container container-event-perso">
	          <div class="row bloc-events-perso justify-content-center">
					<div class="img-event-perso col-xl-8 col-lg-12">
						<img src="<?php the_field('img_event', $event->ID)?>" alt="evenement"/>
					</div>
					<div class="bloc-buy-ticket col-xl-4 col-lg-12">
						<p class="text-intro"><?php the_field('title_intro_event', $event->ID) ?></p>
						<!--LOCATION-->
						<h4>LOCATION</h4>
						<p class="text_location"><?php the_field('text_location', $event->ID) ?></p>
						<!--CAISSE DU SOIR-->
						<h4>CAISSE DU SOIR</h4>
						<p><?php the_field('text_caisse_du_soir	', $event->ID) ?></p>
						<p class="infos_supplementaires">Accessible dès l'ouverture des portes et dans la limite des places disponible</p>
						<a class="btn-buy-event" href="<?php echo get_permalink(12);?>">ACHETER UN BILLET</a>
					</div>
					<div class="bloc-retour">
						<a class="btn-retour wow fadeIn" href="<?php echo get_permalink(8);?>">RETOUR AUX ÉVÉNEMENTS</a>
					</div>
					<div class="col-12 infos-event wow bounceInUp">
						<h4 class="title-artiste"><?php the_field('title_event', $event->ID) ?></h4>
						<p class="style-event"><?php the_field('style_music', $event->ID) ?></p> <!-- Style -->
						<div class="content-infos">
							<p class="text-event_perso"><?php the_field('text_event_page_perso', $event->ID) ?></p> <!-- Texte -->
							<div class="bloc-infos">
								<h4>INFOS PRATIQUES</h4>
								<p><?php the_field('text_date', $event->ID) ?></p>
								<p><?php the_field('text_secondaire', $event->ID) ?></p>
								<p><?php the_field('text_bottom', $event->ID) ?></p>


							</div>
						</div>
						<div class="content-video wow bounceInUp"><?php the_content(); ?></div>

					</div>
	          </div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
