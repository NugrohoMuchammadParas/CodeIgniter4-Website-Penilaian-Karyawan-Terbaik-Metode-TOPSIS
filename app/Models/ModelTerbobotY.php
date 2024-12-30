<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTerbobotY extends Model
{
    protected $table      = 'terbobot_y';
    protected $primaryKey = 'id_terbobot_y';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_terbobot_y', 'id_alternatif', 'id_karyawan', 'kinerja', 'komunikasi', 'kerjasama', 'kreativitas', 'disiplin', 'nilai'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = false;

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function cekData($data)
    {
        return $this->where('id_terbobot_y', $data['id_terbobot_y'])->findAll();
    }

    public function tambah($data)
    {
        $this->insert($data);
    }

    public function ubah($data)
    {
        $this->replace($data);
    }

    public function hapus($id)
    {
        $this->delete($id);
    }

    public function getNameByIdAll()
    {
        return $this->db->table('terbobot_y')
            ->join('karyawan', 'terbobot_y.id_karyawan = karyawan.id_karyawan')
            ->select('terbobot_y.*, karyawan.nama as nama')
            ->get()
            ->getResultArray();
    }
}
