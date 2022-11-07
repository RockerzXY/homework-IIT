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
define('DB_NAME', 'admin');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y3/+<Wopd<CMFZIZuSl=7*4)rv<>C4:+rD&1sT&e,i;*T1om|Bio]<nKznhc4i4M');
define('SECURE_AUTH_KEY',  '<&?MPGLF4NKH,&1-e&1CeG{>loT(;Vu;8O`J!U:Qj4lyeC|lR0X]sl06[1|F.(aE');
define('LOGGED_IN_KEY',    '=&R.W9LI7<g3hdg5*R6V0pzd-+%$#vb!3Or|hc/>jLp;lMSa)COQcvp{aFgqah B');
define('NONCE_KEY',        '1uO++IN0fW$Q9)9JuBLnihegq0K!Jx)6MRLkj-,Q/V=A(,2iHzma{Q~p2]f3(m1;');
define('AUTH_SALT',        '| &ttP{WgmaB`kdQ:HVjKH)f4T~iEM=ES|cgEIjRF!55(2#VXfC}$BZpk8A~(ru8');
define('SECURE_AUTH_SALT', 'h1yDmsN`Li2M/52.GI)n-.)ZCE-q5 CP?y~%P<D^H{)cY${:P?KFKC$-&l^T 3f^');
define('LOGGED_IN_SALT',   'S!+b:nUq@>>F=r7B29!yu~}QLbagM5D)sI#)xrWFQ,fHgHMwF%0i+zM3M9v|*P|<');
define('NONCE_SALT',       'Kycym=4Q41[/u7v5*ii6p^{X-{h?8|wb^.PCBF=XkK&|SLljSc1TVaOUAvR|z09~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
