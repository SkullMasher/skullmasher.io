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

	<div class="page__content">
    <div class="devis-steps">
      <h2>1. Nombre de templates de pages</h2>
      <p>Combien de template de page avez-vous besoin ?</p>
      <p>Une template de page peut être réutilisées sur plusieurs page. Comprend au minumum une template "page d'accueil" et une "page standard". Animation dynamique comprise !</p>
      <p>
        <label class="disclaimer" for="templateNumber">ex: page d'accueil, prestations, page standard</label>
      </p>
      <p>
        <input id="templateNumber" name="templateNumber" type="range" min="2" max="10">
      </p>
    </div>
    <div class="devis-steps">
      <h2>2. Logo</h2>
      <p>Avez-vous un logo et une phrase d'accroche ?</p>
      <p>Une template de page peut être réutilisées sur plusieurs page. Comprend au minumum une template "page d'accueil" et une "page standard". Animation dynamique comprise !</p>
      <p>
        <label class="disclaimer" for="templateNumber">ex: Développement Web et Admininstration Système en Freelance</label>
      </p>
      <p>
        *radio input OUI ou NON*
      </p>

    </div>
    <div class="devis-steps">
      <h2>3. Blog</h2>
      <p><label for="">Avez-vous besoin de créer des articles pour tenir à jour votre site ?</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
    </div>
    <div class="devis-steps">
      <h2>4. Newsletter</h2>
      <p>Souhaitez-vous une newsletter ?</p>
      <p><label for="">Comprend l'ajout de la fonctionalité plus le design et le code d'un modèle de mail sur mesure.</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
    </div>
    <div class="devis-steps">
      <h2>5. Social</h2>
      <p><label for="">Souhaitez-vous intégrer le fil d'actualité, les avis ou recommendation d'un de vos réseaux sociaux sur votre site ?</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
    </div>
    <div class="devis-steps">
      <h2>6. Formation</h2>
      <p>Souhaitez-vous intégrer le fil d'actualité, les avis ou recommendation d'un de vos réseaux sociaux sur votre site ?</p>
      <p><label for="">Comprend 30€ de frait de déplacement à Paris et benlieue. Possibilité de faire la formation en ligne (skype, discord...)</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
    </div>
    <div class="devis-steps">
      <h2>7. Hébergement et nom de domaine</h2>
      <p>Possédez-vous déjà votre hébergement et nom de domaines ?</p>
      <p><label for="">Accompagnement dans le choix de votre nom de domaine et hébergeur web.</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
    </div>
    <div class="devis-steps">
      <h2>8. Maintenance, Support et assistance</h2>
      <p>Avez vous besoin d'une personne responsable de la maintenance du site ?</p>
      <p><label for="">Tout logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard choisissez un responsable capable de vous diriger dans la conduite du changement de votre site web et assurer sa pérénité.
<a href="#">En savoir plus sur la l'offre de maintenance</a>.</label></p>
      <p>
        *radio input OUI ou NON*
      </p>
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
        <li>Design: 2 à 3 jours de design par page avec retour.</li>
        <li>Logo: 2 à 3 jours avec retour.</li>
        <li>Dévelopement des pages: 2 à 3 jours de code par page.</li>
        <li>Newsletter: 4 jours. Design et intégration avec retour.</li>
        <li>Intégration d'un réseaux social/fil d'actualité: Une demi journée.</li>
        <li>Recommandation configuration nom de domaine et hébergeur: une demi journée.</li>
        <li>Déploiement du site, test et retour: 1 à 2 jours.</li>
      </ul>
      <p>Facteur qui aide à réduire le temps de développement de votre site web: Quelles sont les sites web qui vous inspire ? Avez-vous déjà des élements graphique (photo, pictogramme...)? Avez-vous deja rédiger votre contenu textuel ? Quelles sont vos mots clef ?</p>
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
