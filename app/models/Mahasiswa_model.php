<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Nomar Samaa",
            "nim" => "1324134",
            "email" => "nomarbiasaaja@gmail.com",
            "jurusan" => "KPOP"
        ],
        [
            "nama" => "Budiman Zebua",
            "nim" => "123456789",
            "email" => "budijugabiasaaja@gmail.com",
            "jurusan" => "politikus"
        ],
        [
            "nama" => "Heri Ginting",
            "nim" => "245245",
            "email" => "heriburique@gmail.com",
            "jurusan" => "Teknik Elektro"
        ]
    ];


    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
