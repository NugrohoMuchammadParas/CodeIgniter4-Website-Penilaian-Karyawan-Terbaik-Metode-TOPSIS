<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPerangkingan extends Model
{
    protected $table      = 'perangkingan';
    protected $primaryKey = 'id_perangkingan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_perangkingan', 'id_alternatif', 'id_karyawan', 'nilai', 'rank'];

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
        return $this->where('id_perangkingan', $data['id_perangkingan'])->findAll();
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

    public function getOrderedByRank()
    {
        $builder = $this->db->table('perangkingan')
            ->join('karyawan', 'perangkingan.id_karyawan = karyawan.id_karyawan')
            ->select('perangkingan.*, karyawan.nama as nama')
            ->orderBy('rank', 'ASC');

        return $builder->get()->getResultArray();
    }
}
