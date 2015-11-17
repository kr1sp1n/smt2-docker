<?php
/**
 * This is the directory where you put the smt2 CMS.
 * You can use relative as well as full URLs like /smt2/ or http://myserver.name/smt2/
 */
define ('ABS_PATH', getenv('SMT2_ENDPOINT')); // always put an ending slash (/)

// ----------------------------------------------------- MySQL database info ---

/**
 * Your MySQL database name.
 * If you did not create one, smt2 will do it for you.
 * If you cannot create *new* databases, write the name of your current database
 * and smt2 will store their tables there.
 */
define ('DB_NAME',     getenv('MYSQL_DATABASE'));
/**
 * Your MySQL username.
 * This user must have grants to SELECT, INSERT, UPDATE, and DELETE tables.
 */
define ('DB_USER',     getenv('MYSQL_USERNAME'));
/**
 * Your MySQL password.
 */
define ('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
/**
 * Your MySQL server.
 * If port number ### were needed, use 'servername:###'.
 */
define ('DB_HOST',     getenv('MYSQL_ADDRESS'));
/**
 * Prefix for creating smt2 tables.
 * That's really useful if you have only one database.
 */
define ('TBL_PREFIX',  "smt2_");

// ----------------------------------------------------------------- Add-ons ---

/**
 * Your Google maps key for client localization. This one is for localhost.
 * If you put smt2 on your own production server, you should register (for free)
 * at http://code.google.com/apis/maps/signup.html
 */
define ('GG_KEY', getenv('GG_KEY'));

// ------------------------------------------ (smt) functions - do not edit! ---
define ('BASE_PATH', dirname(__FILE__));
define ('INC_PATH', BASE_PATH.'/admin/');
require_once INC_PATH.'sys/functions.php';
?>
