<?php

if (!class_exists('finfo')) {
    if (!defined('FILEINFO_NONE')) {
        define('FILEINFO_NONE', 0);
    }
    if (!defined('FILEINFO_SYMLINK')) {
        define('FILEINFO_SYMLINK', 2);
    }
    if (!defined('FILEINFO_MIME_TYPE')) {
        define('FILEINFO_MIME_TYPE', 16);
    }
    if (!defined('FILEINFO_MIME_ENCODING')) {
        define('FILEINFO_MIME_ENCODING', 1024);
    }
    if (!defined('FILEINFO_MIME')) {
        define('FILEINFO_MIME', 1040);
    }

    class finfo {
        public function __construct($flags = 0, $magic_database = null) {}
        public function file($filename, $flags = 0, $context = null) { return false; }
        public function buffer($string, $flags = 0, $context = null) { return false; }
        public function set_flags($flags) { return true; }
    }
}
