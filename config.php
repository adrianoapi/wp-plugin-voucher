<?php

/**
 *
 * Plugin para administracao do wordpress
 *
 * @link              https://github.com/
 * @since             0.1
 * @package           voucher_app
 *
 * @wordpress-plugin
 * Plugin Name:       Voucher plugin
 * Plugin URI:        https://github.com/
 * Description:       voucher_app config
 * Version:           0.1
 * Author:            Adriano
 */
if (!defined('WPINC')) {
    die;
}

foreach (glob(plugin_dir_path(__FILE__) . 'admin/*.php') as $file) {
    include_once $file;
}

add_action('plugins_loaded', 'voucher_app');

function voucher_app()
{
    $obj = new App(new PageDefault());
    $obj->init();
}
