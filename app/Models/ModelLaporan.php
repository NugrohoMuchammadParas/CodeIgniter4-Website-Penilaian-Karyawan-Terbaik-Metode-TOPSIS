<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaporan extends Model
{
    protected $table      = 'laporan';
    protected $primaryKey = 'id_laporan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_laporan', 'id_akun', 'id_karyawan', 'tanggal', 'file'];

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

    public function getIdByLaporan($id)
    {
        return $this->find($id);
    }

    public function getNameByIdAll()
    {
        return $this->db->table('laporan')
            ->join('karyawan', 'laporan.id_karyawan = karyawan.id_karyawan')
            ->select('laporan.*, karyawan.nama as nama')
            ->get()
            ->getResultArray();
    }

    public function getNameById($id_karyawan)
    {
        return $this->db->table('laporan')
            ->join('karyawan', 'laporan.id_karyawan = karyawan.id_karyawan')
            ->where('laporan.id_karyawan', $id_karyawan)
            ->select('laporan.*, karyawan.nama as nama')
            ->get()
            ->getRowArray();
    }
}
