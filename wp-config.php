<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'alicerouat');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'hEMN?Au`sV%FFtP:@Pd~f9HffRRQCF-~?+WIcFg5~3fhE_{Bz]Jlg3:ZE8DQS1ws');
define('SECURE_AUTH_KEY',  'rx3Y<^;xo.yg*O-#;co!7@)CQXIb|;wToea?G+1zN}BvEauQQUJVQ<ayE-tC-$yq');
define('LOGGED_IN_KEY',    'V!T N!|8)*kTDqKNo`g^ov*!Csxtf@qQW@slZRg=YkbxIX>TWT-JL+a|}wa3|mZ]');
define('NONCE_KEY',        'u3Y;`{f{j>&2B{g:LCtp}iRN65A?r^I+TR_3F8<k%W5EWZT:yE[^I]/fqEa/X3D;');
define('AUTH_SALT',        'D|*<SZr8>]Ssn]nIOxo!g1Nq!!IKn-#dbLc-=jSX,&-G?ORT=A/tn5#iXS%0@#r!');
define('SECURE_AUTH_SALT', '*B[_nm{+,Bf~P_E{y-!u2m+rti-)+.+AQ`A $*$drMR- cjd/c-Jw@TV!n cKyIC');
define('LOGGED_IN_SALT',   '^w2 u2!jZC:C 6WK~y;IF(dZeOW,:bh14!+F}=IJ4wqe2avEb1E(X0:HE?w9os~3');
define('NONCE_SALT',       ')ksIhx;d-i#;@J+;d|brXXFG_CKz)M@}d!{u!Sb&ARBs5=>Jy+D3nRc#0L%:]Y`}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ar_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', true); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');