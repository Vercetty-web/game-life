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

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-game-life' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '#zM`cmwdqZMK}^!Bj8v(//*_Ir.;(Q37m{PyUBgdTX7KT(`hve,t;RaF^FD&w=yK' );
define( 'SECURE_AUTH_KEY',  'dDB4d~3?J{H68s5f0i&|H{U-K.:Sjzj<{|uybaU!B@GDWRcY* OY%,d{-G6UN3?1' );
define( 'LOGGED_IN_KEY',    '_HToRsx(=_@Oh0$7al[cnj`sw-|zLA15(+?Jhy<M4zVJ)bBo[zw7b$,*/^smGVbA' );
define( 'NONCE_KEY',        'KZ.[4H]lrGXc=x6YPQ@Y+ht4@}ZJZQZM<vT[&nt,c*|2;saqEtB|:~fjL/_>Ah_j' );
define( 'AUTH_SALT',        '75yEgLKe+rVG^>]bv7C@.^y?=}%)Na&v;XHj@@{gBLRht4 U3C;7y;t#4bId.:%A' );
define( 'SECURE_AUTH_SALT', 'fGO9JNrWAcr7#R|OW`j4IaYr4dF5H6^R[)n~<$w~!<knauXR@M`nFU{jwU@N(}bH' );
define( 'LOGGED_IN_SALT',   'cl$O|}!vS{zKE-mF_:*yU]2=8jpF_@uss j:+ Q.3IzP6<cmS3Aar4D3js|$gt&v' );
define( 'NONCE_SALT',       'N6VGU3yPP$l/W;^UDce~U1/,J`9N,./g.HUS(f=! 7r3gC2-jb_xU$$YV;Z-[w q' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
