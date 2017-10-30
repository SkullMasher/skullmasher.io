<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('o-box o-wrapper o-wrapper--small'); ?>>
	<header class="page__header">
    <h1 class="page__title">Deviser un site vitrine ou blog idéal pour les particuliers et entreprises local</h1>
    <p>Design sur mesure, compatible téléphonne et tablette.</p>
	</header>

	<div class="page-devis">
    <div class="devis-steps flex-container-v">
      <h2>1. Maquette de pages</h2>
      <p class="devis-question">Combien de maquette de page avez-vous besoin ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Vous pouvez réutiliser la maquette de la page contact sur la page à propos et toute les autres pages. Comprend au minumum une maquette pour la page d'accueil et une maquette pour toutes les autres pages. <span class="animation-showoff">Animation dynamique comprise !</span></p>
      </div>
      <div class="devis-choices flex-container-v o-wrapper o-wrapper--centered">
        <input id="designCount" name="designCount" type="range" min="2" max="10" value="2">
        <p class="txtcenter h4-like">2</p>
        <p class="txtcenter">Design de pages</p>
      </div>
    </div>
    <div class="devis-steps">
      <h2>2. Branding</h2>
      <p class="devis-question">Avez-vous un logo ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-body">Jusqu'à 3 proposition de logos.</p>
      </div>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded ">OUI</button>
        <button class="btn btn--rounded btn--disabled">NON</button>
      </div>
      <div>
        <div class="devis-toggle">
          <input type="checkbox" id="businessCard" class="toggle">
          <label for="businessCard" class="toggle-label">Toggle</label>
          <p class="devis-toggle__label">J'ai besoin d'une carte de visite</p>
        </div>
        <div class="devis-toggle">
          <input type="checkbox" id="flyer" class="toggle">
          <label for="flyer" class="toggle-label">Toggle</label>
          <p class="devis-toggle__label">J'ai besoin d'un flyer</p>
        </div>
        <p><small>Frait d'impression non pris en charge.</small></p>
      </div>

    </div>
    <div class="devis-steps">
      <h2>3. Blog</h2>
      <p><label for="">Avez-vous besoin de créer des articles pour tenir à jour votre site ?</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>4. Newsletter</h2>
      <p>Souhaitez-vous une newsletter ?</p>
      <p><label for="">Comprend l'ajout de la fonctionalité plus le design et le code d'un modèle de mail sur mesure.</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>5. Social</h2>
      <p><label for="">Souhaitez-vous intégrer le fil d'actualité, les avis ou recommendation d'un de vos réseaux sociaux sur votre site ?</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>6. Formation</h2>
      <p>Souhaitez-vous intégrer le fil d'actualité, les avis ou recommendation d'un de vos réseaux sociaux sur votre site ?</p>
      <p><label for="">Comprend 30€ de frait de déplacement à Paris et benlieue. Possibilité de faire la formation en ligne (skype, discord...)</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded ">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>7. Hébergement et nom de domaine</h2>
      <p>Possédez-vous déjà votre hébergement et nom de domaines ?</p>
      <p><label for="">Accompagnement dans le choix de votre nom de domaine et hébergeur web.</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>8. Maintenance, Support et assistance</h2>
      <p>Avez vous besoin d'une personne responsable de la maintenance du site ?</p>
      <p><label for="">Tout logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard choisissez un responsable capable de vous diriger dans la conduite du changement de votre site web et assurer sa pérénité.
<a href="#">En savoir plus sur la l'offre de maintenance</a>.</label></p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>9. Validation</h2>
      <p>Déploiement du site, tests et retour.</p>
      <p><a href="#" class="btn">Générer le PDF</a><a href="#" class="btn">Demander un rendez-vous</a></p>
      <p>Pour en savoir plus concernant cette prestation <a href="#">Consulter la FAQ</a></p>
    </div>
    <div id="faq" class="">
      <h2>FAQ</h2>
      <h3>Combien de temps pour développer mon site ? </h3>
      <ul>
        <li>Design: 2 à 3 jours de par page avec retour.</li>
        <li>Logo: 2 à 3 jours avec retour.</li>
        <li>Dévelopement des pages: 2 à 3 jours de code par page.</li>
        <li>Newsletter: 4 jours. Design et intégration avec retour.</li>
        <li>Intégration d'un réseaux social/fil d'actualité: Une demi journée.</li>
        <li>Recommandation configuration nom de domaine et hébergeur: une demi journée.</li>
        <li>Déploiement du site, test et retour: 1 à 2 jours.</li>
      </ul>
      <h3>Comment je peux réduire le temps de dévellopement de mon site web ?</h3>
      <p>Les réponses à ces quelques question m'aide à réduire le temps de dévellopement de votre projet web mais aussi de corespondre plus précisement à vos attente.</p>
      <ul>
        <li>Quelles sont les sites web qui vous inspire ?</li>
        <li>Avez-vous déjà des élements graphique (photo, pictogramme...) ?</li>
        <li>Avez-vous déjà rédigé votre contenu textuel ?</li>
        <li>Quelles sont vos mots clef ?</li>
      </ul>
      <h3>Mon site sera t-il présent sur google (SEO) ?</h3>
      <p>Nous établirons ensemble une stragégie d'url et de titre de page autour de vos mots clef principaux. Le SEO de votre site sera optimisé par le plugin wordpress "the SEO Framework".</p>
      <h3>Comment ce passe la gestion de mon site ?</h3>
      <p>Votre site est développer avec Wordpress, le gestionnaire de contenu le plus utilisé sur le web et souvent celui qui ai le plus maitrisé par les utilisateurs.</p>
    </div>
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skullmasher-io' ),
        'after'  => '</div>',
      ) );
    ?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="page__footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'skullmasher-io' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit">',
					'</span>',
          '',
          'edit__link btn btn--inline btn--rounded'
				);
			?>
		</footer>
	<?php endif; ?>
</article>
