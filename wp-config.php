<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'marvelgroup' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>k3{s3ESfp!fg@1*RqB!bF*E5M9Pm1Iq,o(6Oo:Ec)V2qqal%?.imt=JQPGS{O8+' );
define( 'SECURE_AUTH_KEY',  'U!pCF{_gKVLI(<8*247E+(bVeom_W:N$i~$81*HS6d;U;XoHNY Yqr}Ln1ge,GwO' );
define( 'LOGGED_IN_KEY',    '#P&{U)llF6&_wMIuMc*}d}5n*>+~=/Q~9dcU/J|kh_1~]jM6r;^0xNRN-DnV?_i@' );
define( 'NONCE_KEY',        '_wrK4=);oLw$8f+ q/i+`voVy{Fsh2eWMHz)!Xn`!i;{+ZUlpLk3^AG&HE^1z7v_' );
define( 'AUTH_SALT',        'B+zsSN]m*{=6y8[/|BnplQpdI,qKGYT]es`nYUf+he.FMBk))0x+6E[Q+,Pw= -H' );
define( 'SECURE_AUTH_SALT', '<$/6^j0<.U7jx2v)DeLc/b.#M-gv|mUMfMlA35vPj&I.VK65%u-dUS+NvbT. 2Ex' );
define( 'LOGGED_IN_SALT',   '4I>H_D4!~!N#Eo#,AUX`s1MJAysrP0j2c,>fcEGIIYiIc4-3+`#tFXh}jx|RsEcL' );
define( 'NONCE_SALT',       ':2YHfeV+Z?}(mK(u()RQSlRi9tnoSz%7vwGJ&u-JJQ J?a<N%g)`tnMQM_VpMhI~' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
