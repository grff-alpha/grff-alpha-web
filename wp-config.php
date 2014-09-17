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
define('DB_NAME', 'giraffeideasweb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '7x%r-V!I@ W)D?pcBp m0r`Z9|:1+7~GLj[aqqg!82Z4Yy`a/EGcl=]t@zG*jF4p'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 's{*2|F_W>zVr;tr:)r[v ?c7z!&|>%v??eo[w1P=S[#kY2B*bew9ONyHrZBg_5y@'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ';Ml$C+/~^n)Ef}:Z;zOGV rh~Ztb!.Weei@w81@km.9y(x%;R(A+zoCX(W(Go|GK'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '*Wc,Emodl$1+Musxp;Tkt5)qnn}Qi?4-!ItK)aZHn|oXoa%1axSPvZ{=5kuDLFyq'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '?kx/xY]G=x:r)8xPI,wO9M]-Mre+KB1z~Yi@Y-+t$-)eANPJ}!nfMg,-WJmLP2>~'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '1vPi5>UR+wVDp>tSV:H{iWiR,][9P5K3`w]zQXkTi}>--#4GubV0|=aa#F=,L5Pg'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'YJ-.nC|/!@}+=BWVxVk(^%(@5ob=v)bm|=>$DkGb[?<,[dznIg+DHYQmgt_xF4~~'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '-)hU#(fYkzJQ9Ak;(&]EP+)=m7a)$ad&aZ74NWl ;#k=Z[YQ-Uxj+k.xw[m2+?3-'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'gff_wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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