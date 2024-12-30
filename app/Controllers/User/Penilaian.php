<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\ModelPerangkingan;

class Penilaian extends BaseController
{
    public function index()
    {
        $data_perangkingan = new ModelPerangkingan();

        $data = [
            'profile' => 'user-profile',
            'halaman' => 'penilaian',
            'logout' => 'logout',
            'penilaian' => $data_perangkingan->getOrderedByRank(),
        ];

        return view('pages/user/penilaian/penilaian', $data);
    }
}
