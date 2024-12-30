<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJarakNegatif extends Model
{
    protected $table      = 'jarak_negatif';
    protected $primaryKey = 'id_jarak_negatif';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_jarak_negatif', 'id_alternatif', 'id_karyawan', 'nilai'];

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
        return $this->where('id_jarak_negatif', $data['id_jarak_negatif'])->findAll();
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
        return $this->db->table('jarak_negatif')
            ->join('karyawan', 'jarak_negatif.id_karyawan = karyawan.id_karyawan')
            ->select('jarak_negatif.*, karyawan.nama as nama')
            ->get()
            ->getResultArray();
    }
}
