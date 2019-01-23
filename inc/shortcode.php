<?php
/**
 * Shortcodes
 *
 * List the shortcodes that can be used on this site
 *
 * @package skullmasher.io
 */

// Return my short bio
function whoami_shortcode() {
  $about_url = site_url() . '/a-propos';

$whoami = <<<EOL
<p class="whoami">Florian "Skullmasher" Ledru, 26ans, freelance depuis juin 2016. Passionné d'informatique, j'ai choisis de faire du web mon travail car c'est un outil très accessible et construit à partir de technologies libre en son coeur.</p>
EOL;

  return $whoami;
}
add_shortcode( 'whoami', 'whoami_shortcode' );

// Return my "let's work together" text
function worktogether_shortcode() {
$worktogether = <<<EOL
<p class="worktogether">Vous souhaitez travailler avec moi ? Je serais ravi d'échanger avec vous.</p>
EOL;

  return $worktogether;
}
add_shortcode( 'worktogether', 'worktogether_shortcode' );

// Return a ui element that show all the ways to contact me
function thesocialnetwork_shortcode() {
  $crypted_mail  = antispambot('florian@skullœmasher.io', 1);

$social = <<<EOL
<div class="contact-me">
  <a href="mailto:$crypted_mail" class="btn btn--centered btn--top-spaced" role="button">Mail</a>
  <a href="https://twitter.com/skullm4sher">Twitter</a>
  <a href="https://steamcommunity.com/id/skullmasher/">Steam</a>
</div>
EOL;

  return $social;
}
add_shortcode( 'worktogether', 'worktogether_shortcode' );
