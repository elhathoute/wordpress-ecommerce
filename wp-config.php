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
define( 'DB_NAME', 'e-commerce-wordpress' );

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
define( 'AUTH_KEY',         'NtPI&Wk+(n1u{{GG(8^xo4-E[*:bKkwzs:]d;jl2jA+/Yf8q@7auULl BIVdFop.' );
define( 'SECURE_AUTH_KEY',  '%]6-=OCgPTBdj6:$(SFx3kajtqlz5Jt&nf7JCAJ0aHI>eG:mAZmw7gkT<]xXq;R-' );
define( 'LOGGED_IN_KEY',    'pv+=rA.G^}CZ0xp:JM0?rLIA=eo|iNU3]4fQ0;?5a++=9L<UYM)OpY}Ht^[Ds[vc' );
define( 'NONCE_KEY',        '~RcB/2B?$UAAXLcl@ ymf7|3(dJEcy?VhEG$VgI/@CEz!c1f6FFac3g`up>9p&IM' );
define( 'AUTH_SALT',        'E(vzLNQg=g]Z3UD<nDh0L2q)T,8YQARbGDOAv3hz ]Ra&&>Edrk0iOIJ(Qy;:MW5' );
define( 'SECURE_AUTH_SALT', 'QNdAuK|=xt;5dO_1Hhp{L%$3g* VD)Wz2&G{4E*dU!ah3/GjOyrJ!v E]D?QHT6e' );
define( 'LOGGED_IN_SALT',   'g2A?KB3*`lAQClwgY->;.}Q5-XetWwt;# Ckv8ds3RwkVu&{xicl87I`_=IYd67/' );
define( 'NONCE_SALT',       'qAcr7T!<Lem`]^:=J4ZE& b|[m4{V3Ww6yKEH]@G9<4hgi[~fr4@w!1wPg5bhlOV' );
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
