<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
$host = php_uname('n');
var_dump($host);
if ($host == "193"){
	define("ENVIRONMENT","develop");
}
else{
	define("ENVIRONMENT","production")
}
if (ENVIRONMENT == "develop"){
	define('DB_NAME', 'toptencomics');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}
else{
	define('DB_NAME', 'toptencomics');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         ']}V&_|xnsP/4xN-M`D)XVa%i3+2Yv/-QUdf,|s!?cuOzGrxbjg|^hlWuH2!j]gs3');
define('SECURE_AUTH_KEY',  'nWXoeniH}ZO&~U@A2%c9%BKUF?~-6RuOiw1Gij*LG@c-_!mv$;oh3+qxGwW2h&WZ');
define('LOGGED_IN_KEY',    'v-5Y|T|.jNL&aos-?+I<F1CO:ga9VV4T,yA eo-,z9s]/? ~f~K3uM!!( K|J>;[');
define('NONCE_KEY',        'TDG:_%_H+_*+29E?UnS@og?pq5B4+q;.*;=ih{#rifyCOly,2U~+UwWu=hL@!zWk');
define('AUTH_SALT',        '*6?+Gph6f[8cwY+HhS.y?gu)yHI;78VjsT}h6`&a+U6+L|q_P!mGq/qMj9w|WPU2');
define('SECURE_AUTH_SALT', ' {&_Ih?KI1$w+M*T2<Y]$kLuCNaaPa<*02|md5E|S4Anjcdm~Li:-(zQ1G5G-Fy ');
define('LOGGED_IN_SALT',   'kda>9;^H5sM-Q7Gr-|-G,Pd >Qi9eZOI| Un])/G=!$FVP|TY]Y(3Z{IFUp_vf0i');
define('NONCE_SALT',       '[[/!;^~e$c}J`5!9P^0zAq=+|JpO538tb/k[$dOp|90sNJJQL$T&r`;tG;^bfzoy');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ttc_wp_';

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
