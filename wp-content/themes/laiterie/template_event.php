<?php /* Template Name: Template Evénements */ get_header(); ?>


  <!-- //////////////////////////// Evénements //////////////////////////// -->
  <div class="container">
    <div class="row justify-content-center">
        <div class="">
          <div class="bloc-events-page">
            <h2>LES ÉVÉNEMENTS</h2>

            <?php
            $events = get_posts( array(
                'posts_per_page' => 10, //
                'post_type' => 'evenements', // Type articles
                'post_status' => 'publish', // statut public uniquement
                'orderby' => 'post_date', // trier par date
                'order' => 'ASC' // trier par date décroissante
            ));
            $boolean = true; //  je déclare mes variables en dehors de la boucle
            $booleanClass= '';// pour éviter de recréer la variable à chaque boucle

            foreach( $events as $event) {

            // D'ABORD JE FAIS MES TESTS POUR SAVOIR QUELLE CLASSE JE VAIS AJOUTER à bloc-events-content

            // ENSUITE JE LANCE LES CONTENUS

                // contenu à afficher  ?>
                <div class="bloc-events-content wow bounceInUp">

                    <!--div class="col-sm-12 col-lg-6"-->
                    <div class="bloc-image-event">
                      <h4 class="date-event"><?php the_field('date_event', $event->ID) ?></h4> <!-- Date -->

                      <img src="<?php the_field('img_event', $event->ID)?>" alt="evenement"/>
                      <?php echo '<a class="btn-decouvrir" href="'.get_permalink($event->ID).'" title="">DÉCOUVRIR</a>'; ?>
                    </div>


                    <!--div class="col-sm-12 col-lg-6 bloc-text-event"-->
                    <div class="bloc-text-event">
                      <h3 class="title-event"><?php the_field('title_event', $event->ID) ?></h3> <!-- Titre -->
                      <p class="style-event"><?php the_field('style_music', $event->ID) ?></p> <!-- Style -->
                      <p class="text-event"><?php the_field('text_event', $event->ID) ?></p> <!-- Texte -->

                  </div>
                </div>
                <hr class="separation-events">

            <?php } /* fin de la boucle foreach */ ?>
          </div>
        </div>
      </div>
  </div>
  <?php get_footer(); ?>
