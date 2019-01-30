<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('page-devis band--lightgrey'); ?>>
  <header class="page__header band band--lightgrey">
    <div class="o-box wrapper wrapper--small">
      <h1 class="page__title">Deviser un site vitrine ou blog, pour les particuliers et les entreprises locales.</h1>
      <div class="flex-container--column">
        <p>Simulez le prix de votre projet web votre projet web en 8 étapes simple et rapide. Le PDF généré à la fin de la simulation de votre projet web est anonyme. Si vous souhaitez continuer votre projet avec ce site remplissez simplement le formulaire durant la dernière étape de validation.</p>
        <p>Design sur mesure, compatible téléphone et tablette.</p>
        <p><strong>3 retours maximum</strong> pour chaque étape du projet.</p>
        <p>Pour en savoir plus concernant cette prestation <a href="#moreinfo">Consulter les informations supplémentaires</a> en pied de pages.</p>
        <a href="#start" class="btn btn--big btn--success center">C'est parti !</a>
      </div>
    </div>
  </header>
  <nav class="devis-nav js-devisNav" id="start">
    <div class="devis-cost">
      <figure class="devis-cost__figure"><?php echo file_get_contents(get_template_directory() .'/img/piggy-bank.svg') ?></figure>
      <div class="devis-cost__content">
        <p><span class="devis-cost__price js-devisCostPrice">1250</span><span class="devis-cost__curency">€</span></p>
      </div>
    </div>
    <div class="devis-time">
      <figure class="devis-time__figure"><?php echo file_get_contents(get_template_directory() .'/img/stopwatch.svg') ?></figure>
      <div class="devis-time__content">
        <p class="devis-time__average">~<span class="devis-time__days js-devisTimeDays">14</span> jours<a href="#devtime"><strong>*</strong></a></p>
      </div>
    </div>
    <!-- <progress value="0.5">70 %</progress> -->
  </nav>
  <section class="page-devis">
    <div class="o-box wrapper wrapper--small">
      <div class="devis-steps flex-container--column" id="maquette">
        <h2>1. Maquette de pages</h2>
        <p class="devis-question">Combien de maquettes avez-vous besoin ?</p>
        <div class="devis-tips wrapper wrapper--tiny">
          <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
          <p class="devis-tips__content">Vous pouvez utiliser une maquette de pages pour créer autant de pages du même types. Comprends au minimum une maquette pour la page d'accueil et une maquette pour toutes les autres pages. <span class="animation-showoff">Animation dynamique comprise !</span></p>
        </div>
        <div class="devis-choices flex-container--column wrapper js-devisChoices">
          <div class="devis-choices__maquette-count">
            <button class="js-maquetteCountSub btn btn--success"><strong>-</strong></button>
            <input class="no-spinners" id="maquetteCount" name="maquetteCount" type="number" min="1" max="10" value="2" maxlength="2">
            <button class="js-maquetteCountAdd btn btn--success"><strong>+</strong></button>
          </div>
          <p class="txtcenter">Design de pages</p>
          <p class="txtcenter mbn"><span>625€</span> <span>5 à 9 jours par pages</span></p>
        </div>
      </div>
      <div class="devis-steps" id="branding">
        <h2>2. Image de marque</h2>
        <p class="devis-question">Avez-vous besoin d'un logo ?</p>
        <div class="devis-tips wrapper wrapper--tiny">
          <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
          <p class="devis-tips__body">Je peux vous proposer jusqu'à trois design de logos différents.</p>
        </div>
        <div class="devis-step__priceinfo">
          <p class="txtcenter"><span>300€</span> <span>2 à 3 jours</span></p>
        </div>
        <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
          <button class="btn btn--big btn--success">NON</button>
          <button class="btn btn--big">OUI</button>
        </div>
        <div class="devis-step__option">
          <div class="devis-switch">
            <div class="devis-switch__input">
              <input type="checkbox" id="businessCard" class="toggle js-devisToggle" data-choiceid="1" data-optionid="0">
              <label for="businessCard" class="toggle-label"></label>
            </div>
            <p class="devis-switch__label">J'ai besoin d'une carte de visite <span class="badge badge--disabled">+300€ 2 jours</span></p>
          </div>
          <div class="devis-switch">
            <div class="devis-switch__input">
              <input type="checkbox" id="flyer" class="toggle js-devisToggle" data-choiceid="1" data-optionid="0">
              <label for="flyer" class="toggle-label"></label>
            </div>
            <p class="devis-switch__label">J'ai besoin d'un flyer. <span class="badge badge--disabled">+300€ 2 jours</span></p>
          </div>
          <p><em>Frais d'impression non pris en charge.</em></p>
        </div>
      </div>
      <div class="devis-steps" id="blog">
        <h2>3. Blog</h2>
        <p class="devis-question">Avez-vous besoin de la fonctionnalité de blog, ou de fil d'actualités personalisé ?</p>
        <div class="devis-step__priceinfo">
          <p class="txtcenter"><span>500€</span> <span>2 à 4 jours</span></p>
        </div>
        <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
          <button class="btn btn--big btn--success">NON</button>
          <button class="btn btn--big">OUI</button>
        </div>
        <div class="devis-step__option">
          <div class="devis-switch">
            <div class="devis-switch__input">
              <input type="checkbox" id="clientRecommendation" class="toggle js-devisToggle" data-choiceid="2" data-optionid="0">
              <label for="clientRecommendation" class="toggle-label"></label>
            </div>
            <p class="devis-switch__label">Je souhaite intégrer un module de recommandation client <span class="badge badge--disabled">+150€ 1 jour</span></p>
          </div>
          <div class="devis-step__option">
            <div class="devis-switch">
              <div class="devis-switch__input">
                <input type="checkbox" id="socialNetwork" class="toggle js-devisToggle" data-choiceid="2" data-optionid="0">
                <label for="socialNetwork" class="toggle-label"></label>
              </div>
              <p class="devis-switch__label">Je souhaite ajouter le fil d'actualité d'un de mes réseaux sociaux <span class="badge badge--disabled">+150€ 1 jour</span></p>
            </div>
          </div>
        </div>
        <div class="devis-steps" id="teaching">
          <h2>4. Formation</h2>
          <p class="devis-question">Souhaitez-vous une journée de formation pour apprendre à gérer votre site ?</p>
          <div class="devis-tips wrapper wrapper--tiny">
            <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
            <p class="devis-tips__content">Comprends 30€ de frais de déplacement à Paris et banlieue. Possibilité de faire la formation en ligne.</p>
          </div>
          <div class="devis-step__priceinfo">
            <p class="txtcenter"><span>280€</span> <span>1 jour</span></p>
          </div>
          <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
            <button class="btn btn--big btn--success">NON</button>
            <button class="btn btn--big">OUI</button>
          </div>
        </div>
        <div class="devis-steps" id="hosting">
          <h2>5. Hébergement et nom de domaine</h2>
          <p class="devis-question">Souhaitez-vous être accompagné dans le choix de votre hébergement et votre nom de domaine ?</p>
          <div class="devis-tips wrapper wrapper--tiny">
            <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
            <p class="devis-tips__content">Hébergez votre site au juste prix en fonction de votre projet. Comprends l'ajout et l'installation d'une ou plusieurs <strong>boite mail professionnel</strong> disponible sur tous vos périphériques (téléphone, tablette) au besoin.</p>
          </div>
          <div class="devis-step__priceinfo">
            <p class="txtcenter"><span>150€</span> <span>1 jour</span></p>
          </div>
          <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
            <button class="btn btn--big btn--success">NON</button>
            <button class="btn btn--big">OUI</button>
          </div>
          <p><em>Frais d'hébergement non compris.</em></p>
        </div>
        <div class="devis-steps" id="support">
          <h2>6. Maintenance, Support et assistance</h2>
          <p class="devis-question">Avez-vous besoin d'une personne responsable de la maintenance du site ?</p>
          <div class="devis-tips wrapper wrapper--tiny">
            <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
            <p class="devis-tips__content">Tout logiciel informatique à besoin d'une personne responsable de sa maintenance. Avant qu'il ne soit trop tard, choisissez un responsable capable gérer votre web et assurer sa pérennité. En savoir plus sur <a href="#maintenance">l'offre de maintenance</a>.</p>
          </div>
          <div class="devis-step__priceinfo">
            <p class="txtcenter"><span>600€</span> <span><strong>1 an</strong></span></p>
          </div>
          <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
            <button class="btn btn--big btn--success">NON</button>
            <button class="btn btn--big">OUI</button>
          </div>
        </div>
        <div class="devis-steps" id="validate">
          <h2>7. Déploiement</h2>
          <p class="devis-question">Souhaitez-vous que je sois responsable de l'installation de votre site web ?</p>
          <div class="devis-tips devis-tips--centered-v wrapper wrapper--tiny">
            <figure class="devis-tips__figure"><?php echo file_get_contents(get_template_directory() .'/img/light-bulb.svg')?></figure>
            <p class="devis-tips__content">Assure la fonctionnalité du site après installation.</p>
          </div>
          <div class="devis-step__priceinfo">
            <p class="txtcenter"><span>500€</span> <span>1 à 2 jours</span></p>
          </div>
          <div class="devis-choices wrapper wrapper--tiny js-devisChoices">
            <button class="btn btn--big btn--success">NON</button>
            <button class="btn btn--big">OUI</button>
          </div>
        </div>
      </div>
      <div class="devis-ready" id="download-devis">
        <div class="o-box wrapper wrapper--small">
          <p class="h2-like">Votre devis est prêt !</p>
          <div class="devis-action">
            <button class="btn btn--big btn--success">Télécharger le devis <?php echo file_get_contents(get_template_directory() .'/img/pdf-file.svg')?></button>
          </div>
          <div class="devis-action">
            <p><span>Ce devis vous intéresse ?</span> Consulter les <a href="#moreinfo">informations complémentaires</a> pour en savoir plus.</p>
          </div>
        </div>
      </div>
      <div id="moreinfo" class="o-box wrapper wrapper--small">
        <h2 class="mbm">Informations Complémentaires</h2>
        <div class="mbm" id="devtime">
          <h3>Réduire le temps de développement de mon projet web</h3>

          <p>Ce devis peut prendre entre <strong class="js-devisTimeDaysMin">10</strong> et <strong class="js-devisTimeDaysMax">18</strong> jours.</p>
          <p>Les réponses à ces quelques questions m'aident à réduire le temps de développement de votre projet web et à correspondre précisément à vos attentes.</p>
          <ol>
            <li>Quelles sont les sites web qui vous inspirent ?</li>
            <li>Avez-vous déjà des éléments graphiques (photos, pictogrammes...) ?</li>
            <li>Avez-vous déjà rédigé votre contenu textuel ?</li>
            <li>Quels sont vos mots clés ?</li>
          </ol>
        </div>
        <div class="mbm">
          <h3>Référencement et présence sur Google (<abbr title="Search engine optimization">SEO</abbr>)</h3>
          <p>Nous établirons ensemble une stratégie d'url et de titre de page autour de vos mots clef principaux. Le <abbr title="Search engine optimization">SEO</abbr> de votre site sera optimisé par le plugin wordpress "The SEO Framework".</p>
          <p>Intégration de votre compte google analytics possible sans surcoup.</p>
        </div>
        <div class="mbm">
          <h3 id="maintenance">Offre de maintenance</h3>
          <ul>
            <li>Disponibilité et Résolution des pannes ou problèmme dans un délai de 24h (ex : panne mails , indisponibilités site web)</li>
            <li>Suivi et Corrections <a href="https://www.exploit-db.com/webapps/">des failles de sécurités</a>.</li>
            <li>Mises à jour du site et des plugins aux versions suivante.</li>
            <li>Rétention et Sauvegarde du site.</li>
          </ul>
        </div>
        <div class="mbm">
          <h3>Gestion de mon site</h3>
          <p>Votre site est développé avec Wordpress, le gestionnaire de contenu le plus utilisé sur le web et souvent celui qui est le plus maîtrisé par les utilisateurs. Le livrable sera un thème wordpress créer à partir <a href="https://underscores.me/">du squelette</a> fourni par les développeurs et la communautée Wordpress.</p>
        </div>
        <div>
          <h3>Livraison express</h3>
          <p>Idéal pour les sites événementiels, le livrable de cette prestation ne comprend pas d'interface de gestion pour changer son contenu et ce déploie plus rapidement et simplement.</p>
          <p>Si vous avez besoin d'un site sous 10 jours ou moins avec design personnalisé</p>
        </div>
      </div>
      <div class="devis-ready">
        <div class="o-box wrapper wrapper--small">
          <p class="h2-like">Établir un rendez-vous</p>
          <p>Formulaire de prise de rendez-vous n'est pas encore disponible.</p>
          <p>Vous pouvez m'envoyer un mail accompagner des réponses à ces différentes questions.</p>
          <div class="flex-container--column">
            <a href="mailto:<?php echo antispambot('florian@skullmasher.io', 1) ?>" class="btn btn--success center" role="button">
              <div class="mbs"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></div>
              <p class="mbn"><?php echo antispambot('florian@skullmasher.io') ?></p>
            </a>
          </div>
        <!-- <form id="meetup">
          <div>
            <div>
              <label for="firstname">Prénom</label>
            </div>
            <input type="text" name="firstname">
          </div>
          <div>
            <div>
              <label for="lastname">Nom</label>
            </div>
            <input type="text" name="lastname">
          </div>
          <div>
            <div>
              <label for="mail">Mail</label>
            </div>
            <input type="text" name="mail">
          </div>
          <div>
            <div>
              <label for="website">Site web (optionel)</label>
            </div>
            <input type="text" name="website">
          </div>
          <div>
            <div>
              <label for="projectinfo">Informations supplémentaire concernant votre projet</label>
            </div>
            <textarea></textarea>
          </div>
          <input class="btn btn--big" type="submit" name="submitproject" value="Envoyer mon projet !">
        </form> -->
      </div>
    </div>
    <div class="o-box wrapper wrapper--small">
      <h4>Crédits graphiques</h4>
      <div>Icons made by <a href="https://www.flaticon.com/authors/flat-icons" title="Flat Icons">Flat Icons</a>, <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a>, <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a>, <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </div>
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
       'edit__link btn btn--primary'
     );
     ?>
   </footer>
 <?php endif; ?>
</article>
