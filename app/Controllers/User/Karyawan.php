<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelKaryawan;

class Karyawan extends BaseController
{
    public function index()
    {
        $data_karyawan = new ModelKaryawan();

        $data = [
            'profile' => 'user-profile',
            'halaman' => 'karyawan',
            'logout' => 'logout',
            'karyawan' => $data_karyawan->getAll(),
        ];

        return view('pages/user/karyawan/karyawan', $data);
    }
}
