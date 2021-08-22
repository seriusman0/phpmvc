<?php

class App
{

    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        $url = $_GET['url'];
        if (isset($_GET['url']));
        return $url;
    }
}
