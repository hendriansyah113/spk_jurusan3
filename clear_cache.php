<?php
// Lokasi di mana CodeIgniter diinstal
define('BASEPATH', __DIR__);

// Memuat CodeIgniter
require_once BASEPATH . '/index.php';

// Mendapatkan instansi CI
$CI = &get_instance();

// Menghapus cache
$CI->load->driver('cache');
$CI->cache->clean();