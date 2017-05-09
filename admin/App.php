<?php

class App
{

    private $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function init()
    {
        add_action('admin_menu', array($this, 'add_options_page'));
    }

    public function add_options_page()
    {

        add_options_page(
                'Configurar Voucher', utf8_encode('Voucher'), 'manage_options', 'custom-admin-page', array($this->page, 'render')
        );
    }

}
