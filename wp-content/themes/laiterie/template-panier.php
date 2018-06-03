<?php /* Template Name: Template Panier */ get_header(); ?>

<div class="container container-panier">
        <div class="bloc-page-panier">
          <h2>MON PANIER</h2>
          <a href="<?php echo get_permalink(8);?>" class="btn-event-retour">RETOUR AUX ÉVÉNEMENTS</p>
        </div>
      <!--Le panier-->
      <div class="row content-panier-infos">
        <div class="col-2 content-img-date">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img-panier.png" alt="Hollysiz" class="img-panier">
          <h4 class="date-event">09 MAI 2018</h4>
        </div>
        <div class="col-7 content-commande">
          <p><span>Nom du porteur du billet :</span> <br class="br-mobile"/>Minette Elisa<br/>
            <span>HOLLYSIZ + Dusk Totem - Tarif Pré-vente</span><br/>
            29 € + frais
          </p>
        </div>
        <div class="content-price">
          <p>29€</p>
        </div>
      </div>
      <!--Validation du panier-->
      <div class="row valid-panier">
        <div class="col-10 bloc-valid-panier">
            <p>Validation du panier</p>
          <p>Quantité</p>
          <select>01</select>
        </div>
        <div class="col-2 bloc-valid-price">
          <p><strong>TOTAL TTC</strong><br/>
          32,90€</p>
        </div>
      </div>
      <!--Bouton du panier-->
      <div class="row cta-register">
        <div class="col-12 btn-commande">
          <a href="#" class="btn-register">ENREGISTRER LE PANIER</a>
          <a href="#" class="btn-validate">VALIDER</a>
        </div>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/certified-1.png" alt="Hollysiz" class="img-panier">
        <img src="<?php echo get_template_directory_uri(); ?>/img/certified-2.png" alt="Hollysiz" class="img-panier">
      </div>
      <hr class="separation">
      <!--CE QUE VOUS POURRIEZ AIMER-->
      <div class="bloc-page-like">
        <h2>CE QUE VOUS POURRIEZ AIMER</h2>
        <div class="row bloc-like-music">
          <!-- 1er bloc -->
          <div class="col-lg-4 col-md-4 col-sm-12 content-like">
            <img src="<?php echo get_template_directory_uri(); ?>/img/like-gael.png" alt="Hollysiz" class="img-like">
            <h4>GAËL FAYE</h4>
            <p>Artiste franco-rwandais</p>
            <a href="#" class="btn-decouvrir">DÉCOUVRIR</a>
          </div>
          <!-- 1er bloc -->
          <div class="col-lg-4 col-md-4 col-sm-12 content-like">
            <img src="<?php echo get_template_directory_uri(); ?>/img/like-cross.png" alt="Hollysiz" class="img-like">
            <h4>CROSSFAITH</h4>
            <p>Artiste fondant Métal calme</p>
            <a href="#" class="btn-decouvrir">DÉCOUVRIR</a>
          </div>
          <!-- 1er bloc -->
          <div class="col-lg-4 col-md-4 col-sm-12 content-like">
            <img src="<?php echo get_template_directory_uri(); ?>/img/like-rhy.png" alt="Hollysiz" class="img-like">
            <h4>RHYE</h4>
            <p>Artiste pop élégante</p>
            <a href="#" class="btn-decouvrir">DÉCOUVRIR</a>
          </div>
        </div>
      </div>

</div>

<?php get_footer(); ?>
