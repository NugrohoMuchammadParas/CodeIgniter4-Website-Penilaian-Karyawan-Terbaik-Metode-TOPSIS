<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKaryawan extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_karyawan', 'id_akun', 'nama', 'lahir', 'telepon', 'email', 'alamat'];

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

    public function getByName($name)
    {
        return $this->db->table('karyawan')
            ->where('nama', $name)
            ->get()
            ->getRowArray();
    }


    public function getIdByName($nama)
    {
        $result = $this->db->table('karyawan')
            ->where('nama', $nama)
            ->get()
            ->getRow();

        return $result ? $result->id_karyawan : null;
    }
}
