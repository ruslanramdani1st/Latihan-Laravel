<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa() {
        $siswa = "Ruslan Ramdani";
        return $siswa;
    }

    public function datasiswi() {
        $siswi = "Aisha Arista Widya";
        return $siswi;
    }

    // Parameter Wajib
    public function nama($nama) {
        return 'Nama anda adalah : ' . $nama;
    }

    // Parameter Opsional
    public function namanya($nama=null) {
        return 'Nama anda adalah : ' . $nama;
    }
}
