<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ParentheseDoreeFinal' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$WC>%kW$|M^Fv`muV?CkxC0m<zcWp&o4<>wE|vybG4=1&41[^De<w/6y16CQ;fl)' );
define( 'SECURE_AUTH_KEY',  'hvJ~#${3]x?#?*lcy`pE?mM5IYLh/)!]5wS!}w_]>M+2<LIdo*@SKRyx{&wSsR#H' );
define( 'LOGGED_IN_KEY',    'X:r;j,But[^(E 1wn^Od:.#o8oO7=Up,#Z{PKVMO~~^%WS_:BCfJxkH>d:keZN.v' );
define( 'NONCE_KEY',        '?9=-w}kFhfPH4i:n8&>pP?9xcvI~K_M0f#f9EI,9o=jqer(Zyq;S*S&TadY5NB.F' );
define( 'AUTH_SALT',        '92PTAv]V_m+.soA~j]ZeE+4:gwWz1*)(>#JQk}&MB8GoD{htG, <f_v<,YZ}r6L^' );
define( 'SECURE_AUTH_SALT', ')>AVrR/4=I[yTS>waY^3=/:66&{#4V#^_Bwl.HqgkuRW#7k~m@YV6;*BaK(yR$Up' );
define( 'LOGGED_IN_SALT',   '2|Mi!)U^HNG[Jy|Q5UXl{CE4MECGNHCw{F=;Fz$9)*>+[gD9;UWy&9,;,q4A2689' );
define( 'NONCE_SALT',       'VK`6m1u>@o/b}U:72G_ZX8NQ=dd{19l$r~=@EED`I&2Vh}[}x-<2c 5y9&&t1I/5' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
