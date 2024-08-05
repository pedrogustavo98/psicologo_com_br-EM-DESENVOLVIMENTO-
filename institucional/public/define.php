<?php
require_once('../public/constants.php');

switch ($_SERVER['HTTP_HOST']) {
    case DEVELOPMENT_URL:
        define('DB_DRIVE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'root');
        define('DB_NAME', 'padfacil_com_br');
        break;
    case MAC_URL:
        define('DB_DRIVE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '979899');
        define('DB_NAME', 'padfacil_com_br');
        break;
    case TEST_URL:
        define('DB_DRIVE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_USER', 'timecaio');
        define('DB_PASS', '871999#1))&1');
        define('DB_NAME', 'padfacil_com_br');
        break;
}
