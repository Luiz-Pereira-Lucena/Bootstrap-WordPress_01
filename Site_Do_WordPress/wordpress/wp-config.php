<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_wp_bt' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.{ iq4Y4%%GHmhj*X0>]D>(umU^_laMxdU/^+i{r-#>;%p[_2K3 npuHt0CCCgIP' );
define( 'SECURE_AUTH_KEY',  '#&&YyupXA]a1>DuD1%,c|e(O6NKye5WXd0@K^QC:QrLG,B)n_m7pA)DFPaaTF#A3' );
define( 'LOGGED_IN_KEY',    'm`b`YCD&Z^$KI_5zcatjt]0U2s?z6z)2Lz+eda0$]a7f{,#R,)G-(!*BF9|OIYnR' );
define( 'NONCE_KEY',        '>oA^k8mB/D~&e7)fv#$>|8e!WFR~V~}W)|COx}zh~US^i(X<n~rCtshgazY48X/-' );
define( 'AUTH_SALT',        't>fDHK-,}zWmV4HPb@9 U>1q(sx|pY8dh4Ique9!snohj3_~<+y<T^0zF&*Pi0m_' );
define( 'SECURE_AUTH_SALT', '0b5Ypa$e#PS }wm6w|ul*zul8Ebaz`sF`$HQRpTyklst.ZG9/ 4zv5+MOfkAaSQI' );
define( 'LOGGED_IN_SALT',   ',4<?%Ca~7Ug|#T5_+gInm.C=S{Yq)s(x/PBSc?N{:{Vw-mb|-l:C,y(n_mNcK_wy' );
define( 'NONCE_SALT',       '$YW~:1PlC3Te8;I2a3Jb)#R&7f6CLREcN~RP2gq4[uJYJjwSgtvve22M}tdFxi.o' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
