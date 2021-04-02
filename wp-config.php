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
define( 'DB_NAME', 'maxence-deschamps' );

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
define('AUTH_KEY',         '7CI>M]eeS1|!llW([3G1&o#b{|GZo(fAc[;g+u ym)R6,%&hE5|.3^ubu/DjN-uR');
define('SECURE_AUTH_KEY',  'v2=bq-A|5[k|@4b#1:BiElkafboD[,^!9+g-R8>NeM|WR%l)0eQ+7t4p-m9r1HKm');
define('LOGGED_IN_KEY',    '`CYGxL?~v$-r@@a|D@v>h#VQPm+4-6 3FTmboiNh7CoJj>V2+uuBj5 ofg+s>-?f');
define('NONCE_KEY',        'HR.-*o/cZK$26oSYi&D<Gy0bv7BhUFthr,WvWKw1G6{2jpu-vaf{:RYBl,1Vp^KR');
define('AUTH_SALT',        '3NUP##Ov|=g@lHoD$3j=SK+lHkp]q9q&|h?[<M34D:U|,o#3r3(IOr9?GD|`-= w');
define('SECURE_AUTH_SALT', 'DfO8nDYLM&-AEJR&gPvVM!s)6pJA?7]S%t<&fE/u.S-p1|t5MDkxC`)G>L& =i5V');
define('LOGGED_IN_SALT',   '[PZ|J=)e`pl3+=e/T**i_s,VF^UF.2RQNJ@%B{%5R|=H[+tjw/9{L!uVuc(P@U2P');
define('NONCE_SALT',       'E-lp6)x.n--8tyv*>&L.2?:vJO*Khyh%<|UXY>[$kYVCI$:B-M{uoO]^*&n>-her');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'zE3e0_';

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

define('WP_POST_REVISIONS', 3);
