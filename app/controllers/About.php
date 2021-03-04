<?php

class About
{
    public function index($nama = "Serius", $pekerjaan = "Programmer")
    {
        echo "Halo, nama saya adalah $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
