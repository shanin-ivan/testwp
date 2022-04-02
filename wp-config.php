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
 * * Настройки MySQL
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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         'k3)3H%!3/8}/S/8P]`hq&Fl&YCA]zKGWetK2`zg)[_X_5i#(ME!&0<YZ~M&..u* ' );
define( 'SECURE_AUTH_KEY',  ')QCs-.czU2~9aVr%xwW3hXF<dP13j0ujPDb-Xs!I9^@06Ogt[YQ4y,}tcHL2Rv1y' );
define( 'LOGGED_IN_KEY',    '[~Paz%fA$q~;Ieqbi2eBgfje(+dAB`+>Sj(&40nZu+C1^))_Ov{71@-yh$)pq2,k' );
define( 'NONCE_KEY',        '$%1Hc.KxRQCepo>%$<>@BiNNq e)A9}/]-C.$n((P:yMy~;=kr]NXh}.Q1Qir*`o' );
define( 'AUTH_SALT',        'z5?7Rdc*5vOe*Uq5+q9TR;#bJ^I8hS<bm({3s-y-D^lEJG&*/iifq?4qR?+;xmM-' );
define( 'SECURE_AUTH_SALT', 'j-j7mnxFD2VE@e11kg][!BYaOpCe9n(ZqFDZbyh0IQfi}u6ht(a7]Ik3i_;c@3MK' );
define( 'LOGGED_IN_SALT',   '|j&>a@_$gnK&7Ja*!Z10|(D$7x_~lc`K83}}vqj^R#jDZ1&yTlDs5h4sHx{q>=FU' );
define( 'NONCE_SALT',       '9w&4rYWPNAkA89oWf:m/4;&n!aqZhXma;1mC6(bcqsl}Aw8<E5c3O$g!LUe^LCdr' );

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
