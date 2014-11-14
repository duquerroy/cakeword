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
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'cakeword');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'capucins');

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
define('AUTH_KEY',         'y+a$^gGyj&!ExyQ$-~af:K OV2`Kq8^R<eb1mR/~|Tw.n$si=vuVVDBth>k4-@OK');
define('SECURE_AUTH_KEY',  '1Sw-<D+e[&N%q4-=I[7q<NDa0+[5B^?u6I])X~$+1p[g}yy-@aj#L(*AL^0*6Qn5');
define('LOGGED_IN_KEY',    '|Ih+SmbloY}f^4S]$]|g[qH(Bg70c-:k~[VQMP{ms#++Ei^r:tkfCZGB!OLM1r(b');
define('NONCE_KEY',        ',]JEG>q6{{9SC.ohj{|[WQPB$-pp8~`7q}2V@@X~sX@k:hZ%33Va@)|+|JaN1(fZ');
define('AUTH_SALT',        '6{ ,T=KOZ@y+_8GttmxV/6@(.|pD1bCIx4x]GH1uQ_Xv>bjF2q$W_LT(a+eA+4bu');
define('SECURE_AUTH_SALT', '8kWJlC|<?Pd+X(IpCIbv)BL+Od?++|](v4FXcY7$9I.v%i?8`wq2+~E|Y,I% [uC');
define('LOGGED_IN_SALT',   ']S{=$-@M{]cH4zER)[C@0E3Bsbq^k^$Z=|Qxz;U+}F*(#5Z8Y%Q5HbXB#)Y.&{BH');
define('NONCE_SALT',       'L Sm|BYUOv-Yfs4@ &Am8Ia8b:AwwBHJj2C(}r/elq[5l>kxcZCbIHhjrIw`=/`P');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gd_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', true); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
