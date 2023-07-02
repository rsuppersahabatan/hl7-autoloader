<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hl7
{
    public function __construct()
    {
        log_message('Debug', 'HL7 class is loaded.');
    }

    public function load()
    {
        require_once APPPATH . 'third_party/Aranyasen/autoloader.php';
        $objHl7 = new Hl7;
        return $objHl7;
    }
}