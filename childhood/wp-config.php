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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'childhood' );

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
define( 'AUTH_KEY',         'wCDO@Cj($$|zP]z`)AEaPZ{dn6%Qj%=^h3X2%frouoor-WmHpo28a>%=#S)L0eeh' );
define( 'SECURE_AUTH_KEY',  'E9B+1{tO(rN6:zDj2eB*Hm]BDKnn(/ H/JIjP~|uztuwHU)xJZ&}e8Da&y4}*R2J' );
define( 'LOGGED_IN_KEY',    'mY=;)%*%mH{;[O-d{.r%.H2!}bd`z5i>s`Pzzyp0Jx)4y Th}S]+5|}Qg[Z$M@IQ' );
define( 'NONCE_KEY',        '#F2OO|9tWVK`}Jj?|rIh;i%/$jo/zfh*3$.j1^TxtqDH&BZ/!<S7`75avWPUf;@^' );
define( 'AUTH_SALT',        'pV[_dk0Yi[OG>;hfUX.%Te6`Yi[K721*Ti1O[/WTKtqR3V|jr11VbX-g#(TT8Bjw' );
define( 'SECURE_AUTH_SALT', ',#(WSflgmq:6L$yi3gt*8a((2D[wH&1d.%53lBXpEsg$OlKX%WrOpEQP8qt{!8e~' );
define( 'LOGGED_IN_SALT',   'w$[%O_iv:~P1,u:[;t:C`6P^?le[imxp!Y:hWjmRY/AcLmO]H|o70NA3h1dzhB-2' );
define( 'NONCE_SALT',       'lE<mGF5j@a1`%^#C_X}%v9h.wNElScF:lPMgxQuM-#tw,K3}QGx-4CSK3xdt$wq+' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
