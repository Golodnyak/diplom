<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// define( 'WP_HOME', 'http://domain.com.ua' );
// define( 'WP_SITEURL', 'http://domain.com.ua' );

// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', true);

define( 'DISALLOW_FILE_EDIT', true );

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPresіs */
define( 'DB_NAME', 'avisstud_diplom' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'avisstud_diplom' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '2D2cc@H+4p' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'avisstud.mysql.tools' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@f[U+*QXF=1(>T2Z/k_q F8GncfKS2~`]GuL3!]$i*?4W4AJTFQ(9EN|R,%</{%*' );
define( 'SECURE_AUTH_KEY',  'XA.A<5F{bM5?evHek][MB}LWQK%x_:OkQXtrZ hua#S&@a)d[IUu7 iRq&KlX9H{' );
define( 'LOGGED_IN_KEY',    'M-i$xN7Zp5Mi_eq>>A(M9fR%d ,lr%inar]%(grn?Q|.42qTTpzY~F]&~@?~IB54' );
define( 'NONCE_KEY',        '/]c)M@}=5dP;)$Z!/G>RBG|7xO(8Lxjta alw,:x.cws2SK|Dn;C$$qjI+4Aa*oO' );
define( 'AUTH_SALT',        'Dq cO%Ek:R*9|%48|8:4y|~}K0Ub,E+6%G98pNk.o=xYps/fXMGI5LU*57)>0*pV' );
define( 'SECURE_AUTH_SALT', 'tZ$G)=+N3$x?N%#]|je4>-`L?j>],DN0Avz]Pcrx*.c]ut/g`F&a8Y6,;pc/)WLV' );
define( 'LOGGED_IN_SALT',   'mmPi9ia#z.VFF[Bd<yip,G_7-8kl,vV=mID+-O(UsyoGT2tBi/OwZ!,*_%F{m8UW' );
define( 'NONCE_SALT',       ';b%Hea|a!obYj|iS.i:PrmNM`H$o| N@0a6mY08H2RAK/C/cf mmYM8(?]J|.psB' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
