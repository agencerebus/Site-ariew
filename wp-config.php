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
define('DB_NAME', '');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '');

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
define('AUTH_KEY',         '&Ca}QM~6}<YN0*-$n>!-oa8=&h+w*9;nd%hCQWU6NFFK5fq?@EM@j,DhCiM5o@BQ');
define('SECURE_AUTH_KEY',  'b)Qo}%g,=YK{nm-`!#jZ9xBLBBSFReB[etF28?Z:k.:I%2P`xk=!dnF?xiw+MZ?b');
define('LOGGED_IN_KEY',    'w/y)`.UiRQ8f):!X=s(uZ[ae3 >89g`-X[NuPlc%1|)=TXj0~aD/dTOQu1#&x+#{');
define('NONCE_KEY',        'IHD)UDa]g6-Sg:Ls`-#Ht~638)o`a&P(NTqU0c`> A4~54?@5Q7%2U(*E8lwW{y5');
define('AUTH_SALT',        '><&@dU@/1fb N$Hg4u?VKBUH1n3xWL%rI]tKD|~u6$-TuX%C23Cd7@Gp%t@uq-(j');
define('SECURE_AUTH_SALT', 'C7+$N&-W1c3s8I%M=sF#=aqpLxwZ(Z#9!&{^E1bDrq GONB)m8^Fe~@XR*LJ~:?a');
define('LOGGED_IN_SALT',   'tzE=J>&#g,=,Ye}qxRp~v;tKl1`S%h1ic^%@9!z?_r-E*r@3/|&^[mdt?%Pm4lUU');
define('NONCE_SALT',       '3!abvHJ-|z!3o-H}s,m10anBAtI8i+[HGnne*dIHs%KguNmD.)j>N?ptl i-s=N-');
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