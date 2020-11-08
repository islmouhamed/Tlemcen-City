<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Ville');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'CH( V*.qi!p~ pU;#mMJi%r?G{f%Knp]49&JOu!|x@vm}7l>I.nq>~pAfXT?O:x_');
define('SECURE_AUTH_KEY',  'veL5k4&NNF2jMfuJww;?AFdCR!e,=@7s[(P_EXIq%w#?m$4[5Ke?^S*Px;e[?`GA');
define('LOGGED_IN_KEY',    '230XEEgQ{Gw)>{NZG*FL{;# k${.673v|q@%)B8w~,uc8-k{5E@R fezBs_:0kF3');
define('NONCE_KEY',        'dOOSPf[/I@Zg2vZg~bQh.Y7p plaMh%XPQG5T(AEP@@:V8womOEwZ2af`au)C9yz');
define('AUTH_SALT',        'zVT4ien}uE>=)DBMHgdZ_0|JPj:(1x9f)wB@uA4l_.t~<rpTQK:/(0B8#K# sPz ');
define('SECURE_AUTH_SALT', 'uXMa0egPQEo&r,9fj>m/@5GH-2D3P=0?DNZ263*QLeOFTI$:9d(XRV6UMw?6oHwx');
define('LOGGED_IN_SALT',   '*w2]PAX]spc7pYtztt^$ogpz& fpl/1:a;D5Tu].hP=ZMHlD[,I{XTSS+QGM(A7B');
define('NONCE_SALT',       '5tTJgiJ*_ !k@,;wo~^;ij`+NP m07AV3e(AR|EP?c],>h_4Hj}?O-|{O/zx3<{B');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');