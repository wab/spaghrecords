<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'spaghrecords');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IYJxOYF_WJFwza||5)/l3o*m4dyypoM7>EUeJJB*-RO=;hlM|KE-Ryp~xA*/Droq');
define('SECURE_AUTH_KEY',  '@sM#lP(lD{O!S.rPE|R2W-K*=+q7lO:S@(f%u;XpkI+)sVAjR6 ilYGt(j@( {];');
define('LOGGED_IN_KEY',    'G<]M>jQ#V9i&&u_-,OY]=?!g9[7DJ/KK?9Whmkm`M8YKKV[vkW=ZX55lq2o 0{qI');
define('NONCE_KEY',        'FB;83 07C#ZefFK;FX6+=kw+P:iZ6+7Z5q!lz+qI-H]/fh$zl+jvW!^$KWfyhOku');
define('AUTH_SALT',        'TU04^am6lt-h{Wy@s1}>0>FmPadDZq=q5ti{p/|0-wSdRM_yt&AgP>[nVGpHZ_T$');
define('SECURE_AUTH_SALT', 'rzH&{]?ax~x 9I(I~_b/VwRJj*Be[QDX?![D_i2lEsu|Oa7S4K]pu8SdJ!%I<HXX');
define('LOGGED_IN_SALT',   '+I1ey8H2p/Gz_yDoa,IptEo6tr?Y>:T u@yQvxe+h=CijN?Yu}]!F.0J{Ln3JX=1');
define('NONCE_SALT',       'zWe=t|v#PFE~ru~I AT?(t?*%^:2&NskZ@.f+,9-TYsTD|-g&GW,s 9J+`jcw-40');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

define('WP_HOME', 'http://www.spaghrecords.fr');
define('WP_SITEURL', 'http://www.spaghrecords.fr');

define('WP_ENV', 'production');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');