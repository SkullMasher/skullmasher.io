<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('band--lightgrey'); ?>>
	<header class="page__header band band--lightgrey">
    <div class="o-box o-wrapper o-wrapper--small">
      <h1 class="page__title">Deviser un site vitrine ou blog, pour les particuliers et les entreprises locales.</h1>
      <div class="flex-container-v">
        <p>Simulez le prix de votre projet web votre projet web en 7 étapes simple et rapide. Le PDF généré à la fin de la simulation de votre projet web est anonyme. Si vous souhaitez continuer votre projet avec ce site remplissez simplement le formulaire durant la dernière étape de validation.</p>
        <p>Design sur mesure, compatible téléphone et tablette.</p>
        <div class="warning o-media o-wrapper o-wrapper--tiny" id="warningNOJS">
          <figure class="o-media-figure o-media-figure--center"><?php echo file_get_contents(get_template_directory() .'/img/warning.svg')?></figure>
          <p class="o-media-content">Veuillez activer JavaScript pour utiliser cette page. La version no-JS arrive bientôt. Les devis sont créés coté client et l'interaction des boutons est en JS. J'étais préssé par le temps...</p>
        </div>
        <a href="#start" class="btn btn--large btn--centered btn--spaced">C'est parti !</a>
      </div>
    </div>
  </header>
  <nav class="devis-nav" id="start">
    <div class="devis-cost">
      <p><span class="devis-cost__price">2250</span><span class="devis-cost__curency">€</span></p>
    </div>
    <div class="devis-time o-media">
      <figure class="devis-time__figure o-media-figure o-media-figure--center"><?php echo file_get_contents(get_template_directory() .'/img/stopwatch.svg') ?></figure>
      <div class="devis-time__content o-media-content">
        <p class="devis-time__average"><span class="devis-time__days">10</span> jours</p>
        <p><span class="devis-time__days-min">8</span> à <span class="devis-time__days-max">12</span>jours</p>
      </div>
    </div>
    <!-- <progress value="0.5">70 %</progress> -->
  </nav>
	<section class="page-devis o-box o-wrapper o-wrapper--small">
    <div class="devis-steps flex-container-v" id="maquette">
      <h2>1. Maquette de pages</h2>
      <p class="devis-question">Combien de page avez-vous besoin ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Vous pouvez réutiliser la maquette de la page contact sur la page à propos et toute les autres pages. Comprend au minimum une maquette pour la page d'accueil et une maquette pour toutes les autres pages. <span class="animation-showoff">Animation dynamique comprise !</span></p>
      </div>
      <div class="devis-choices flex-container-v o-wrapper o-wrapper--centered">
        <input class="devis-choices__range" id="maquetteCount" name="maquetteCount" type="range" min="2" max="10" value="2">
        <p class="txtcenter h1-like"><strong>2</strong></p>
        <p class="txtcenter">Design de pages</p>
      </div>
    </div>
    <div class="devis-steps" id="branding">
      <h2>2. Image de marque</h2>
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
        <div class="devis-switch">
          <div class="devis-switch__input">
            <input type="checkbox" id="businessCard" class="toggle">
            <label for="businessCard" class="toggle-label">Toggle</label>
          </div>
          <p class="devis-switch__label">J'ai besoin d'une carte de visite</p>
        </div>
        <div class="devis-switch">
          <input type="checkbox" id="flyer" class="toggle">
          <label for="flyer" class="toggle-label">Toggle</label>
          <p class="devis-switch__label">J'ai besoin d'un flyer</p>
        </div>
        <p><small>Frais d'impression non pris en charge.</small></p>
      </div>

    </div>
    <div class="devis-steps" id="blog">
      <h2>3. Blog</h2>
      <p class="devis-question">Avez-vous besoin de créer des articles pour tenir à jour votre site ?</p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
      <div class="devis-switch">
        <div class="devis-switch__input">
          <input type="checkbox" id="socialNetwork" class="toggle">
          <label for="socialNetwork" class="toggle-label">Toggle</label>
        </div>
        <p class="devis-switch__label">Je souhaite également intégrer le fil d'actualité, les avis ou les recommendations d'un de mes réseaux sociaux.</p>
      </div>
    </div>
    <div class="devis-steps" id="newsletter">
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
    <div class="devis-steps" id="teaching">
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
    <div class="devis-steps" id="hosting">
      <h2>6. Hébergement et nom de domaine</h2>
      <p class="devis-question">Possédez-vous déjà votre hébergement et nom de domaines ?</p>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
    </div>
    <div class="devis-steps" id="support">
      <h2>7. Maintenance, Support et assistance</h2>
      <p class="devis-question">Avez vous besoin d'une personne responsable de la maintenance du site ?</p>
      <div class="devis-tips o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
        <p class="o-media-content">Tout logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard, choisissez un responsable capable gérer votre web et assurer sa pérénitée. En savoir plus sur <a href="#">l'offre de maintenance</a>.</p>
      </div>
      <div class="devis-choices o-wrapper o-wrapper--tiny">
        <button class="btn btn--rounded btn--disabled">OUI</button>
        <button class="btn btn--rounded">NON</button>
      </div>
      <div class="devis-switch">
        <div class="devis-switch__input">
          <input type="checkbox" id="maintainWebsite" class="toggle">
          <label for="maintainWebsite" class="toggle-label">Toggle</label>
        </div>
        <p class="devis-switch__label">Je souhaite que vous soyez responsable de la publication et la mise en forme des nouvelles pages et nouveaux article sur mon site.</p>
      </div>
    </div>
    <div class="devis-steps" id="validate">
      <h2>8. Validation</h2>
      <div class="devis-tips devis-tips--centered-v o-media o-wrapper o-wrapper--tiny">
        <figure class="o-media-figure"><?php echo file_get_contents(get_template_directory() .'/img/validate.svg')?></figure>
        <p class="o-media-content">Déploiement du site, tests et retour.</p>
      </div>
      <div class="devis-action">
        <button class="btn">Voir le PDF</button><button class="btn">Télécharger le PDF</button>
      </div>
      <p></p>
      <p>Pour en savoir plus concernant cette prestation <a href="#faq">Consulter la FAQ</a>.</p>
    </div>
    <div id="faq" class="">
      <h2>FAQ</h2>
      <h3>Combien de temps pour développer mon site ? </h3>
      <ul>
        <li>Design : 2 à 3 jours de par page.</li>
        <li>Logo : 2 à 3 jours</li>
        <li>Dévelopement des pages : 2 à 3 jours de code par page.</li>
        <li>Newsletter : 4 jours. Design et intégration avec retour.</li>
        <li>Intégration d'un réseaux social/fil d'actualité : Une demi-journée.</li>
        <li>Recommandation configuration nom de domaine et hébergeur : une demi journée.</li>
        <li>Déploiement du site, tests et retour : 1 à 2 jours.</li>
      </ul>
      <p><strong>3 retours maximum</strong> pour chaque étape du projet.</p>
      <h3>Comment puis-je réduire le temps de développement de mon projet web ?</h3>
      <p>Les réponses à ces quelques questions m'aide à réduire le temps de dévellopement de votre projet web et à correspondre précisément à vos attentes.</p>
      <ol>
        <li>Quelles sont les sites web qui vous inspirent ?</li>
        <li>Avez-vous déjà des éléments graphiques (photo, pictogramme...) ?</li>
        <li>Avez-vous déjà rédigé votre contenu textuel ?</li>
        <li>Quels sont vos mots clés ?</li>
      </ol>
      <h3>Mon site sera t-il présent sur google (<abbr title="Search engine optimization">SEO</abbr>) ?</h3>
      <p>Nous établirons ensemble une stragégie d'url et de titre de page autour de vos mots clef principaux. Le <abbr title="Search engine optimization">SEO</abbr> de votre site sera optimisé par le plugin wordpress "The SEO Framework".</p>
      <h3>Comment se passe la gestion de mon site ?</h3>
      <p>Votre site est développé avec Wordpress, le gestionnaire de contenu le plus utilisé sur le web et souvent celui qui est le plus maîtrisé par les utilisateurs.</p>
    </div>
    <hr>
    <div>Icons made by <a href="https://www.flaticon.com/authors/flat-icons" title="Flat Icons">Flat Icons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skullmasher-io' ),
        'after'  => '</div>',
      ) );
    ?>
	</section>

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
