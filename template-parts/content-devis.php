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
    <h1 class="page__title">Deviser un site vitrine ou blog, pour les particuliers et les entreprises locales.</h1>
    <p>Design sur mesure, compatible téléphone et tablette.</p>
    <div class="warning o-media o-wrapper o-wrapper--tiny" id="warningNOJS">
      <figure class="o-media-figure o-media-figure--center"><?php echo file_get_contents(get_template_directory() .'/img/warning.svg')?></figure>
      <p class="o-media-content">Veuillez activer JavaScript pour utiliser cette page. La version no-JS arrive bientôt. Les devis sont créés coté client et l'interaction des boutons est en JS. J'étais préssé par le temps...</span></p>
    </div>
	</header>

	<div class="page-devis">
    <div class="devis-steps flex-container-v">
      <h2>1. Maquette de pages</h2>
      <p class="devis-question">Combien de page avez-vous besoin ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Vous pouvez réutiliser la maquette de la page contact sur la page à propos et toute les autres pages. Comprend au minimum une maquette pour la page d'accueil et une maquette pour toutes les autres pages. <span class="animation-showoff">Animation dynamique comprise !</span></p>
      </div>
      <div class="devis-choices flex-container-v o-wrapper o-wrapper--centered">
        <input id="designCount" name="designCount" type="range" min="2" max="10" value="2">
        <p class="txtcenter h1-like">2</p>
        <p class="txtcenter">Design de pages</p>
      </div>
    </div>
    <div class="devis-steps">
      <h2>2. Branding</h2>
      <p class="devis-question">Avez-vous un logo ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-body">Je peux vous proposer jusqu'à trois design de logos différents.</p>
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
        <p><small>Frais d'impression non pris en charge.</small></p>
      </div>

    </div>
    <div class="devis-steps">
      <h2>3. Blog</h2>
      <p class="devis-question">Avez-vous besoin de créer des articles pour tenir à jour votre site ?</p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
      <div class="devis-toggle">
        <input type="checkbox" id="flyer" class="toggle">
        <label for="flyer" class="toggle-label">Toggle</label>
        <p class="devis-toggle__label">Je souhaite également intégrer le fil d'actualité, les avis ou les recommendations d'un de mes réseaux sociaux.</p>
      </div>
    </div>
    <div class="devis-steps">
      <h2>4. Newsletter</h2>
      <p class="devis-question">Souhaitez-vous une newsletter ?</p>
      <p></p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Comprend l'ajout de la fonctionnalité avec le design et le code d'un modèle de mail sur mesure.</p>
      </div>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>5. Formation</h2>
      <p class="devis-question">Souhaitez-vous une journée de formation pour apprendre à gérer votre site ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Comprend 30€ de frais de déplacement à Paris et banlieue. Possibilité de faire la formation en ligne (skype, discord...)</p>
      </div>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded ">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>6. Hébergement et nom de domaine</h2>
      <p class="devis-question">Possédez-vous déjà votre hébergement et nom de domaines ?</p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps">
      <h2>7. Maintenance, Support et assistance</h2>
      <p class="devis-question">Avez vous besoin d'une personne responsable de la maintenance du site ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Tout logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard, choisissez un responsable capable gérer votre web et assurer sa pérénitée. En savoir plus sur l'offre de maintenance.
<a href="#">En savoir plus sur la l'offre de maintenance</a>.</p>
      </div>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
      <div class="devis-toggle">
        <input type="checkbox" id="flyer" class="toggle">
        <label for="flyer" class="toggle-label">Toggle</label>
        <p class="devis-toggle__label">Je souhaite que vous soyez responsable de la publication et la mise en forme des nouvelles pages et nouveaux article sur mon site.</p>
      </div>
    </div>
    <div class="devis-steps">
      <h2>8. Validation</h2>
      <div class="devis-tips devis-tips--centered-v o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/validate.svg')?></figure>
        <p class="o-media-content">Déploiement du site, tests et retour.</p>
      </div>
      <div class="devis-action">
        <a href="#" class="btn">Générer le PDF</a><a href="#" class="btn">Demander un rendez-vous</a>
      </div>
      <p></p>
      <p>Pour en savoir plus concernant cette prestation <a href="#faq">Consulter la FAQ</a></p>
    </div>
    <div id="faq" class="">
      <h2>FAQ</h2>
      <h3>Combien de temps pour développer mon site ? </h3>
      <ul>
        <li>Design : 2 à 3 jours de par page avec retour.</li>
        <li>Logo : 2 à 3 jours avec retour.</li>
        <li>Dévelopement des pages : 2 à 3 jours de code par page.</li>
        <li>Newsletter : 4 jours. Design et intégration avec retour.</li>
        <li>Intégration d'un réseaux social/fil d'actualité : Une demi-journée.</li>
        <li>Recommandation configuration nom de domaine et hébergeur : une demi journée.</li>
        <li>Déploiement du site, tests et retour : 1 à 2 jours.</li>
      </ul>
      <h3>Comment puis-je réduire le temps de développement de mon projet web ?</h3>
      <p>Les réponses à ces quelques questions m'aide à réduire le temps de dévellopement de votre projet web et à correspondre précisément à vos attentes.</p>
      <ol>
        <li>Quelles sont les sites web qui vous inspirent ?</li>
        <li>Avez-vous déjà des éléments graphiques (photo, pictogramme...) ?</li>
        <li>Avez-vous déjà rédigé votre contenu textuel ?</li>
        <li>Quels sont vos mots clés ?</li>
      </ol>
      <h3>Mon site sera t-il présent sur google (SEO) ?</h3>
      <p>Nous établirons ensemble une stragégie d'url et de titre de page autour de vos mots clef principaux. Le SEO de votre site sera optimisé par le plugin wordpress "The SEO Framework".</p>
      <h3>Comment se passe la gestion de mon site ?</h3>
      <p>Votre site est développé avec Wordpress, le gestionnaire de contenu le plus utilisé sur le web et souvent celui qui est le plus maîtrisé par les utilisateurs.</p>
    </div>
    <hr>
    <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
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
