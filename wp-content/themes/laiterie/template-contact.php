<?php /* Template Name: Template Contact */ get_header(); ?>

<!-- //////////////////////////// Contact //////////////////////////// -->
<div class="container container-contact">
  <div class="row justify-content-center">
      <div class="background-contact">
        <div class="bloc-contact">
          <h2>NOUS CONTACTER</h2>
          <p>Laissez nous un message ci-dessous</p>
              <form class="bloc-formulaire" method="post">
                <input class="champ-text" id="prenom" type="text" name="prenom" placeholder="Votre prénom"/><br/>
                <input class="champ-text" id="nom" type="text" name="nom" placeholder="Votre nom"/><br/>
                <input class="champ-text" id="demande" type="text" name="demande" placeholder="Votre demande"/><br/>
                <br/><textarea name="textarea" rows="10" cols="50" placeholder="Votre message"></textarea><br/>
                <input class="cta-envoyer" type="submit" name="Envoyer"/>
              </form>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>
