<?php
/**
  * Template Name: Template home
  */

  get_header();?>
<!-- //////////////////////////// slider //////////////////////////// -->
    <div class="container container-slider">
      <div class="row justify-content-center">
          <div class="col-12">
            <div class="slider-home">
              <?php
              $slides = get_posts( array(
                  'posts_per_page' => 4, //
                  'post_type' => 'slider', // Type articles
                  'post_status' => 'publish', // statut public uniquement
                  'orderby' => 'post_date', // trier par date
                  'order' => 'ASC' // trier par date décroissante
              ));

              foreach( $slides as $slide) {
                  // contenu à afficher
                    echo '<div class="text-slider-home" style="background:url('.get_the_post_thumbnail_url($slide->ID).'); background-size:cover;height:800px;">'; // image.')">';
                      echo '<h2 class="wow fadeInRight title-slider-home">'.get_field('title_slider', $slide->ID).'</h2>'; // Titre slider
                      echo '<hr class="wow fadeInRight separation-hr">';
                      echo '<p class="wow fadeInRight text-slider">'.get_field('text_slider', $slide->ID).'</p>'; // Texte slider
                      echo '<a class="wow fadeInRight btn-slider" href="'.get_permalink(8).'" title="">DÉCOUVRIR</a>';
                    echo '</div>';
              }
                ?>
          </div>
          </div>
        </div>
    </div>

    <!-- //////////////////////////// Evénements //////////////////////////// -->
    <div class="container">
      <div class="row justify-content-center">
          <div class="">
            <div class="bloc-events">
              <?php
              $events = get_posts( array(
                  'posts_per_page' => 3, //
                  'post_type' => 'evenements', // Type articles
                  'post_status' => 'publish', // statut public uniquement
                  'orderby' => 'post_date', // trier par date
                  'order' => 'ASC' // trier par date décroissante
              ));
              $boolean = true; //  je déclare mes variables en dehors de la boucle
              $booleanClass= '';// pour éviter de recréer la variable à chaque boucle

              foreach( $events as $event) {

              // D'ABORD JE FAIS MES TESTS POUR SAVOIR QUELLE CLASSE JE VAIS AJOUTER à bloc-events-content

                if($boolean == true){$booleanClass = 'row1';         $boolean = false;}
                else{                $booleanClass = 'row-reverse'; $boolean = true;}

              // ENSUITE JE LANCE LES CONTENUS

                  // contenu à afficher  ?>
                  <div class="wow bounceInUp bloc-events-content <?php echo $booleanClass ?>">

                      <!--div class="col-sm-12 col-lg-6"-->
                      <div class="bloc-image-event">
                        <img src="<?php the_field('img_event', $event->ID)?>" alt="evenement"/>
                      </div>


                      <!--div class="col-sm-12 col-lg-6 bloc-text-event"-->
                      <div class="bloc-text-event">
                        <div class="bg-color-date">
                            <h4 class="date-event"><?php the_field('date_event', $event->ID) ?></h4> <!-- Date -->
                        </div>
                        <h3 class="title-event"><?php the_field('title_event', $event->ID) ?></h3> <!-- Titre -->
                        <hr class="separateur-event"> <!-- Style -->

                        <p class="style-event"><?php the_field('style_music', $event->ID) ?></p> <!-- Style -->
                        <p class="text-event"><?php the_field('text_event', $event->ID) ?></p> <!-- Texte -->
                        <?php echo '<a class="btn-decouvrir" href="'.get_permalink($event->ID).'" title="">DÉCOUVRIR</a>'; ?>
                    </div>

                  </div>
              <?php } /* fin de la boucle foreach */ ?>
            </div>
            <div class="btn-event">
              <a class="btn-decouvrir-event" href="<?php echo get_permalink(8);?>">DÉCOUVRIR LES PROCHAINS ÉVÉNEMENTS</a>
            </div>
          </div>
        </div>
    </div>

    <!-- //////////////////////////// Atouts //////////////////////////// -->
    <div class="container container-atouts">
      <div class="row justify-content-center">
          <div class="col-12">
            <div class="content-atouts">
              <p><span>4000</span><br/>Évenements</p>
              <p><span>10 000</span><br/>Artistes</p>
              <p><span>2 000 000</span><br/>Spéctateurs</p>
            </div>
          </div>
      </div>
    </div>
    <!-- //////////////////////////// Devenir partenaire //////////////////////////// -->
    <div id="partner" class="container wow bounceInUp container-partner">
      <div class="row justify-content-center">
          <div class="col-12">
            <div class="content-partner">
              <h3 class="title-partner"><?php the_field('title_partner'); ?></h3>
              <p class="text-partner"><?php the_field('text_partner'); ?></p>
              <a href="<?php echo get_permalink(14);?>" class="btn-decouvrir">NOUS CONTACTER</a>
            </div>
          </div>
      </div>
    </div>
    <!-- //////////////////////////// Newsletter //////////////////////////// -->
    <div class="container container-newsletter">
      <div class="row justify-content-center">
          <div class="col-12">
            <div class="content-formulaire">
              <form method="post">
                <label for="age">S'INSCRIRE À LA NEWSLETTER</label><input class="champ" id="email" type="text" name="email" placeholder="votre email"/>
                <input class="send" type="submit" name="Envoyer" />
              </form>
            </div>
          </div>
      </div>
    </div>

    <!-- //////////////////////////// slider partenaires //////////////////////////// -->
        <div class="container container-partenaires-slider">
          <div class="row justify-content-center">
              <div class="col-12">
                <div class="slider-partenaire">
                  <?php
                  $sliderpartenaires = get_posts( array(
                      'posts_per_page' => 6, //
                      'post_type' => 'sliderpartenaires', // Type articles
                      'post_status' => 'publish', // statut public uniquement
                      'orderby' => 'post_date', // trier par date
                      'order' => 'ASC' // trier par date décroissante
                  ));

                  foreach( $sliderpartenaires as $sliderhomes) {
                      // contenu à afficher
                    echo get_the_post_thumbnail($sliderhomes->ID);// Titre slider
                  }
                    ?>
              </div>
              </div>
            </div>
        </div>
    <?php
      get_footer();?>
