<?php

#------ CONFIGURAÇÕES MYSQL ------------------------------------------------------------------------------------
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
#---------------------------------------------------------------------------------------------------------------

#------ AUTENTICAÇÃO DE CHAVES EXCLUSIVAS ----------------------------------------------------------------------
define('AUTH_KEY',         '*kq6+/&>S/,f}k/}bQ9=L;V&=gy%)Jek!r8`O|F[>gFaS r`9+N{*l2U%sM7~ye|');
define('SECURE_AUTH_KEY',  'b9*-iICwN8|w-+R#,#E}^+&Ue4;{G{RBL9u jjPr+5f}cN0u{6!~ReohK9KXu]l-');
define('LOGGED_IN_KEY',    'x-gtR$:#za[C@5d:+))$,fM#0hC(N9A.Kb33Jo}${:Sm=4e#nbWh%+c0#-lE@8@P');
define('NONCE_KEY',        'N+QpW+Jm>7-k4Wr9|8^Bx|?J|Y0{c,fGi%|hKGmKMr@e .{*xR%~Bjw+tpX$N*-6');
define('AUTH_SALT',        '#a?E/q.-a<{/Ev$R0d.M=lm8;%ypz0]NW<h&,(oMpd|]h3#<~TG]PkkB#cI5m4a5');
define('SECURE_AUTH_SALT', 'E}b!|no7humT)|,H5g*`llX53&4AWdU/#$ #32FrfyKn^m<XL-{^]Ofa2++GHuB-');
define('LOGGED_IN_SALT',   ',vpXA}Tj*?U$*s,)~be%?8fsyl1eNhP5Q5rh2-!S:S?`(V V>IHygxKO/$>t{/L.');
define('NONCE_SALT',       'g%5xuS8i5m>xDW+}1#<=_|)dY+aB0!}(h-x2Eb#>%;2u0K^>D|Hi!D5~(zzvO`_/');
#---------------------------------------------------------------------------------------------------------------

$table_prefix = 'wp_';

define('WP_DEBUG', false);

#------ CAMINHO PARA O WORDPRESS -------------------------------------------------------------------------------
if (! defined( 'ABSPATH'))
{
    define('ABSPATH', dirname( __FILE__ ) . '/');
}
#---------------------------------------------------------------------------------------------------------------

require_once( ABSPATH . 'wp-settings.php');