<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelKaryawan;
use App\Models\ModelPerangkingan;
use App\Models\ModelLaporan;
use App\Models\ModelAkun;

class Home extends BaseController
{
    public function index()
    {
        $data_karyawan = new ModelKaryawan();
        $data_perangkingan = new ModelPerangkingan();
        $data_laporan = new ModelLaporan();
        $data_akun = new ModelAkun();

        $data = [
            'profile' => 'user-profile',
            'halaman' => 'home',
            'logout' => 'logout',
            'karyawan' => $data_karyawan->getAll(),
            'perangkingan' => $data_perangkingan->getAll(),
            'laporan' => $data_laporan->getAll(),
            'akun' => $data_akun->getAll(),
        ];

        return view('pages/user/home/home', $data);
    }
}
