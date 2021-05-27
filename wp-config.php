define('WP_POST_REVISIONS', 0);



Debugging
// enable debug
define( 'WP_DEBUG', true );
// save log to random-named file
define( 'WP_DEBUG_LOG', 'wp-content/debug-2JY9XdqpFm.log' );
// enable showing errors if $_GET param flydebug is equal debugfly
if ( isset($_GET['flydebug']) && $_GET['flydebug'] == 'debugfly') {
    define( 'WP_DEBUG_DISPLAY', true );
} else {
    define( 'WP_DEBUG_DISPLAY', false );
}


/* SITE URL */
define( 'WP_HOME', 'https://cs.kskonovalov.me/' );
define( 'WP_SITEURL', 'https://cs.kskonovalov.me/' );


/* FTP */
define( 'FTP_USER', 'u91580752' );
define( 'FTP_PASS', 'TrashBone!123' );
define( 'FTP_HOST', 'home713928414.1and1-data.host' );
define( 'FTP_SSL', true );


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'https://example.com/' );
define( 'WP_HOME',        'https://example.com/' );
define( 'WP_CONTENT_URL', 'https://example.com/wp-content' );
define( 'UPLOADS',        'https://example.com/wp-content/uploads' );
define( 'WP_PLUGIN_URL',  'https://example.com/wp-content/plugins' );
define( 'COOKIE_DOMAIN',  'subdomain.example.com' );


/* AutoSave Interval. */
define( 'AUTOSAVE_INTERVAL', '30' );
/* Disable Post Revisions. */
define( 'WP_POST_REVISIONS', false );
/* Media Trash. */
define( 'MEDIA_TRASH', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'true' );
define( 'ALTERNATE_WP_CRON',    'true' );
define( 'WP_CRON_LOCK_TIMEOUT', 30 );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'https://midominio.es' );
define( 'WP_HOME',        'https://midominio.es' );
define( 'WP_CONTENT_URL', 'https://midominio.es/la-chicha' );
define( 'UPLOADS',        'https://midominio.es/la-chicha/subidas' );
define( 'WP_PLUGIN_URL',  'https://midominio.es/la-chicha/pulgines' );
define( 'COOKIE_DOMAIN',  'https://cookies.midominio.es' );


/* AutoSave Interval. */
define( 'AUTOSAVE_INTERVAL', '120' );
/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '4' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '256' );
define( 'WP_MAX_MEMORY_LIMIT', '512' );

/* WordPress Cache */
define( 'WP_CACHE', true );

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'true' );
define( 'ALTERNATE_WP_CRON',    'true' );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

/* Concatenar JS */
define( 'CONCATENATE_SCRIPTS', true );

