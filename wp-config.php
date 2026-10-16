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
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l:rIp-AX`Yf7{7)3m[B<]=Y>Phc!7em)&&AyR>]rjE@Hw_kNeD.:^b|Hg};RaMRc' );
define( 'SECURE_AUTH_KEY',  'qf[DP=Pm+|@DuoN76>UlET0Q~W3a!5NjD:{CI]/^57WcD9xuSDT?kCEjcwv?7;fK' );
define( 'LOGGED_IN_KEY',    'JD1W?(dw(FYQ*AEGfdb7xzOsIgf3/HAW[D@O;oORGT0d@5/rXsF,/ZzZ% ,MGlN]' );
define( 'NONCE_KEY',        'WTp_A%iMj)jbUg @LUWR6qGmz;70/$7S&72^Z3Xd)PqY2K(>{NE{kpz)jv~?CzFK' );
define( 'AUTH_SALT',        'aTa_%l_cT5!(Rd4+?,}~s}t?=X4Y[+t&8>&|6)/#<5zf)_057 k:n#C-AfFyG&QA' );
define( 'SECURE_AUTH_SALT', ']DQ&<~%{<kf/kuwrKzg*O^GK >< iKyP LXP?(<6.^EHPuV8CE,.N-[D1 }6:379' );
define( 'LOGGED_IN_SALT',   '|_K?<`>iCq,n?5]TqZ_j>!-[CLLHD{{ZT_0zeV=,~UvK5[PL!n8[+IMi}//$|vbr' );
define( 'NONCE_SALT',       '&)|Vuku}k&F-!F1gL1j|B0t,]eT{2g${;lBdDD1$qJq1YxRqP5pLBlQsXF^k~4lM' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
