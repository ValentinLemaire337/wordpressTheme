<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpresstheme' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'valentinlemaire' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'p2JMr25XN]0o6TP_' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']ScdBDBpWZ+KVCvdi]D_/Kne7rw<}&7nR#M(W|6kU~?x/E.n?Jmmv%)ns%|&[]Fe' );
define( 'SECURE_AUTH_KEY',  'uC!QTwOxt!]T2y[e  %vcO1W7pc0J~edw,L>B_7*cQz?k^sn70Ql~V@N]_7o,`UB' );
define( 'LOGGED_IN_KEY',    '6KrLE@CVzL-y.]L5suN26r36v?D#e4*M,qe L?SP;|jHR Wn`g./Pe6m`qrHJ8%=' );
define( 'NONCE_KEY',        '6r<V).fFJm.Pj6i<;UYYZ|I_mk1pCXob-Q|)A*xSR+xoa;TU[OwY0 /wAS|U(3`O' );
define( 'AUTH_SALT',        'v^(`[ceYdy%iE.A0vHH||TyW1vGcO0^dru?en!)`S#gM|1Gg{dp[?3RnHVAM~ENB' );
define( 'SECURE_AUTH_SALT', 'QC[Z1*%x=re3e2aq~O)4zF|k#jslOhb+BTA6;]GhcRBKm.UyxV .$VYxxM$4P0%r' );
define( 'LOGGED_IN_SALT',   '^]~rtP)t0nSBICh%8`9R;1Q)P)VjXy}C2H.lY@THR9TkfcUYuPN1UN$k5wCI7!_K' );
define( 'NONCE_SALT',       '^-qZ_EYZhrroe? __do*;o=/l9j!r@h=i@, Tw8_81kM/>=?o&f<sZibdjjv&(nI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_wordpresstheme';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
