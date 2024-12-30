<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlternatif;
use App\Models\ModelKriteria;
use App\Models\ModelPembagi;
use App\Models\ModelTerbobotR;
use App\Models\ModelTerbobotY;
use App\Models\ModelIdealPositif;
use App\Models\ModelIdealNegatif;
use App\Models\ModelJarakPositif;
use App\Models\ModelJarakNegatif;
use App\Models\ModelPerangkingan;
use CodeIgniter\I18n\Time;

class Penilaian extends BaseController
{
    public function index()
    {
        $data_perangkingan = new ModelPerangkingan();

        $data = [
            'perhitungan' => "admin-penilaian-perhitungan",
            'profile' => 'admin-profile',
            'halaman' => 'penilaian',
            'logout' => 'logout',
            'penilaian' => $data_perangkingan->getOrderedByRank(),
        ];

        return view('pages/admin/penilaian/penilaian', $data);
    }

    public function index_perhitungan()
    {
        $data_alternatif = new ModelAlternatif();
        $data_kriteria = new ModelKriteria();
        $data_pembagi = new ModelPembagi();
        $data_terbobot_r = new ModelTerbobotR();
        $data_terbobot_y = new ModelTerbobotY();
        $data_ideal_positif = new ModelIdealPositif();
        $data_ideal_negatif = new ModelIdealNegatif();
        $data_jarak_positif = new ModelJarakPositif();
        $data_jarak_negatif = new ModelJarakNegatif();
        $data_perangkingan = new ModelPerangkingan();

        $data = [
            'kembali' => "admin-penilaian",
            'profile' => 'admin-profile',
            'halaman' => 'penilaian',
            'logout' => 'logout',
            'print_perhitungan' => "admin-perhitungan-print",
            'alternatif' => $data_alternatif->getNameByIdAll(),
            'kriteria' => $data_kriteria->getAll(),
            'pembagi' => $data_pembagi->getAll(),
            'terbobot_r' => $data_terbobot_r->getNameByIdAll(),
            'terbobot_y' => $data_terbobot_y->getNameByIdAll(),
            'ideal_positif' => $data_ideal_positif->getAll(),
            'ideal_negatif' => $data_ideal_negatif->getAll(),
            'jarak_positif' => $data_jarak_positif->getNameByIdAll(),
            'jarak_negatif' => $data_jarak_negatif->getNameByIdAll(),
            'penilaian' => $data_perangkingan->getOrderedByRank(),
        ];

        return view('pages/admin/penilaian/perhitungan_penilaian', $data);
    }

    public function index_print_penilaian()
    {
        $data_perangkingan = new ModelPerangkingan();

        $data = [
            'penilaian' => $data_perangkingan->getOrderedByRank(),
        ];

        return view('pages/admin/penilaian/print_penilaian', $data);
    }

    public function index_print_perhitungan()
    {
        $data_alternatif = new ModelAlternatif();
        $data_kriteria = new ModelKriteria();
        $data_pembagi = new ModelPembagi();
        $data_terbobot_r = new ModelTerbobotR();
        $data_terbobot_y = new ModelTerbobotY();
        $data_ideal_positif = new ModelIdealPositif();
        $data_ideal_negatif = new ModelIdealNegatif();
        $data_jarak_positif = new ModelJarakPositif();
        $data_jarak_negatif = new ModelJarakNegatif();
        $data_perangkingan = new ModelPerangkingan();

        $data = [
            'alternatif' => $data_alternatif->getNameByIdAll(),
            'kriteria' => $data_kriteria->getAll(),
            'pembagi' => $data_pembagi->getAll(),
            'terbobot_r' => $data_terbobot_r->getNameByIdAll(),
            'terbobot_y' => $data_terbobot_y->getNameByIdAll(),
            'ideal_positif' => $data_ideal_positif->getAll(),
            'ideal_negatif' => $data_ideal_negatif->getAll(),
            'jarak_positif' => $data_jarak_positif->getNameByIdAll(),
            'jarak_negatif' => $data_jarak_negatif->getNameByIdAll(),
            'penilaian' => $data_perangkingan->getOrderedByRank(),
        ];

        return view('pages/admin/penilaian/print_perhitungan_penilaian', $data);
    }
}
