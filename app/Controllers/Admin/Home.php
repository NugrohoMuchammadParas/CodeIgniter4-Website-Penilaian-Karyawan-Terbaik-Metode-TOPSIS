<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelKaryawan;
use App\Models\ModelPerangkingan;
use App\Models\ModelLaporan;
use App\Models\ModelAkun;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{
    public function index()
    {
        $data_karyawan = new ModelKaryawan();
        $data_perangkingan = new ModelPerangkingan();
        $data_laporan = new ModelLaporan();
        $data_akun = new ModelAkun();

        $data = [
            'karyawan' => $data_karyawan->getAll(),
            'perangkingan' => $data_perangkingan->getAll(),
            'laporan' => $data_laporan->getAll(),
            'akun' => $data_akun->getAll(),
            'profile' => 'admin-profile',
            'halaman' => 'home',
            'logout' => 'logout',
        ];

        return view('pages/admin/home/home', $data);
    }
}
