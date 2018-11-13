<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'focus');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'LviO!~*o2sbJD+QW&_;XH)`smfX`/j ),I@Nk}v0;#R[f1(a_M&J!Q}M3D@bbOb{');
define('SECURE_AUTH_KEY', 'mr@-@)%=,Ink|_T]d^~kDZek(huHw$:$o76mF{*?n]C;la Nq^Q)QwszldO8{`S+');
define('LOGGED_IN_KEY', 'zATseXVl1.{<8?NdH{J/U$z4:5R&ERhbcFcGn?<p]09h/U?BgqgNj|+}`X`5j8KS');
define('NONCE_KEY', 'hDn*O8o*^s6337p}m@u][9R3%~rx*TfsSv1.ll{jiYKARI4_raT1uw0jZRZpE@vf');
define('AUTH_SALT', ',)YHV<7S~BdbpWO[^}NLUo`6U`WXc1a@9I>guT58*A.eF$$[i,)f WN+eV)~#==(');
define('SECURE_AUTH_SALT', ';&~R7,m&mGx=Am%Ubs|/HUll67p@&fvd~pd&;9Y>w[v&B#Cv`F~rHAAX;OfJyZCf');
define('LOGGED_IN_SALT', '[?-ZS-h4*ymGgyB$Cq|YKu3,km4!~x;KG1d5hNi^ft*>UKDwHeB.X]$s_{_vicV}');
define('NONCE_SALT', '3*OP]1#E=2t,Wo<:YHFL5}lspP07@m EJDsd!>g59$p6d:Rwj1xA9@#4TMj}{:yi');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

