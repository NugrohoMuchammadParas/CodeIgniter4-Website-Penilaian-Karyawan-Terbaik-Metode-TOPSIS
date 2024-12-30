<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAlternatif extends Model
{
    protected $table      = 'alternatif';
    protected $primaryKey = 'id_alternatif';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_alternatif', 'id_akun', 'id_karyawan', 'kinerja', 'komunikasi', 'kerjasama', 'kreativitas', 'disiplin'];

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
        return $this->where('id_alternatif', $data['id_alternatif'])->findAll();
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
        return $this->db->table('alternatif')
            ->join('karyawan', 'alternatif.id_karyawan = karyawan.id_karyawan')
            ->select('alternatif.*, karyawan.nama as nama')
            ->get()
            ->getResultArray();
    }

    public function getNameById($id_karyawan)
    {
        return $this->db->table('alternatif')
            ->join('karyawan', 'alternatif.id_karyawan = karyawan.id_karyawan')
            ->where('alternatif.id_karyawan', $id_karyawan)
            ->select('alternatif.*, karyawan.nama as nama')
            ->get()
            ->getRowArray();
    }
}
