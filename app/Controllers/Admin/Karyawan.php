<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelKaryawan;
use CodeIgniter\I18n\Time;

class Karyawan extends BaseController
{
    public function index()
    {
        $data_karyawan = new ModelKaryawan();

        $data = [
            'tambah' => "admin-karyawan-tambah",
            'ubah' => "admin-karyawan-ubah",
            'hapus' => "admin-karyawan-hapus",
            'profile' => 'admin-profile',
            'halaman' => 'karyawan',
            'logout' => 'logout',
            'karyawan' => $data_karyawan->getAll(),
        ];

        return view('pages/admin/karyawan/karyawan', $data);
    }

    public function index_tambah()
    {
        $data = [
            'kembali' => "admin-karyawan",
            'profile' => 'admin-profile',
            'halaman' => 'karyawan',
            'logout' => 'logout',
            'validation' => \Config\Services::validation(),
        ];

        return view('pages/admin/karyawan/tambah_karyawan', $data);
    }

    public function tambah()
    {
        $data_karyawan = new ModelKaryawan();

        $id_akun = session()->get('id_akun');

        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[karyawan.nama]|min_length[4]|max_length[30]',
                'errors' => [
                    'required' => 'Nama harus diisi.',
                    'is_unique' => 'Nama sudah terdaftar di sistem.',
                    'min_length' => 'Nama harus memiliki minimal 4 karakter.',
                    'max_length' => 'Nama harus memiliki maximal 30 karakter.'
                ]
            ],
            'lahir' => [
                'rules' => 'required|valid_date[Y-m-d]',
                'errors' => [
                    'required' => 'Tanggal lahir harus diisi.',
                    'valid_date' => 'Tanggal lahir harus berupa tanggal yang valid.'
                ]
            ],
            'telepon' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nomor telepon harus diisi.',
                    'numeric' => 'Nomor telepon harus berupa angka.',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Alamat email harus diisi.',
                    'valid_email' => 'Alamat email harus berupa alamat email yang valid.'
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Alamat harus diisi.',
                    'min_length' => 'Alamat harus memiliki minimal 4 karakter.',
                    'max_length' => 'Alamat harus memiliki maximal 100 karakter.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            $data = [
                'validation' => $validation,
                'profile' => 'admin-profile',
                'halaman' => 'karyawan',
                'logout' => 'logout',
                'kembali' => "admin-karyawan",
            ];
            return view('pages/admin/karyawan/tambah_karyawan', $data);
        }

        $data = [
            'id_akun' => $id_akun,
            'nama' => $this->request->getVar('nama'),
            'lahir' => $this->request->getVar('lahir'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $data_karyawan->tambah($data);

        $data_flash = [
            'icon' => 'fas fa-check',
            'state' => 'success',
            'message' => 'Data Berhasil Ditambah !!',
            'title' => 'Tambah Data',
        ];
        session()->setFlashdata($data_flash);

        return redirect()->to(base_url('admin-karyawan'));
    }

    public function index_ubah($id)
    {
        $data_karyawan = new ModelKaryawan();

        $data = [
            "kembali" => "/admin-karyawan",
            'profile' => '/admin-profile',
            'halaman' => 'karyawan',
            'logout' => '/logout',
            "karyawan" => $data_karyawan->getById($id),
            "validation" => \Config\Services::validation(),
        ];

        return view('pages/admin/karyawan/ubah_karyawan', $data);
    }

    public function ubah($id)
    {
        $data_karyawan = new ModelKaryawan();
        $data_id = $data_karyawan->getById($id);

        $id_akun = session()->get('id_akun');

        if ($data_id['nama'] == $this->request->getVar('nama')) {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required|min_length[4]|max_length[30]',
                    'errors' => [
                        'required' => 'Nama harus diisi.',
                        'min_length' => 'Nama harus memiliki minimal 4 karakter.',
                        'max_length' => 'Nama harus memiliki maximal 30 karakter.'
                    ]
                ],
                'lahir' => [
                    'rules' => 'required|valid_date[Y-m-d]',
                    'errors' => [
                        'required' => 'Tanggal lahir harus diisi.',
                        'valid_date' => 'Tanggal lahir harus berupa tanggal yang valid.'
                    ]
                ],
                'telepon' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor telepon harus diisi.',
                        'numeric' => 'Nomor telepon harus berupa angka.',
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Alamat email harus diisi.',
                        'valid_email' => 'Alamat email harus berupa alamat email yang valid.'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required|min_length[4]|max_length[100]',
                    'errors' => [
                        'required' => 'Alamat harus diisi.',
                        'min_length' => 'Alamat harus memiliki minimal 4 karakter.',
                        'max_length' => 'Alamat harus memiliki maximal 100 karakter.'
                    ]
                ]
            ])) {
                $validation = \Config\Services::validation();
                $data = [
                    'validation' => $validation,
                    'kembali' => "/admin-karyawan",
                    'profile' => '/admin-profile',
                    'halaman' => 'karyawan',
                    'logout' => '/logout',
                    "karyawan" => $data_karyawan->getById($id),
                ];
                return view('pages/admin/karyawan/ubah_karyawan', $data);
            }
        } else {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required|is_unique[karyawan.nama]|min_length[5]|max_length[20]',
                    'errors' => [
                        'required' => 'Nama harus diisi.',
                        'is_unique' => 'Nama sudah terdaftar di sistem.',
                        'min_length' => 'Nama harus memiliki minimal 5 karakter.',
                        'max_length' => 'Nama harus memiliki maximal 20 karakter.'
                    ]
                ],
                'lahir' => [
                    'rules' => 'required|valid_date[Y-m-d]',
                    'errors' => [
                        'required' => 'Tanggal lahir harus diisi.',
                        'valid_date' => 'Tanggal lahir harus berupa tanggal yang valid.'
                    ]
                ],
                'telepon' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'Nomor telepon harus diisi.',
                        'numeric' => 'Nomor telepon harus berupa angka.',
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Alamat email harus diisi.',
                        'valid_email' => 'Alamat email harus berupa alamat email yang valid.'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required|min_length[4]|max_length[100]',
                    'errors' => [
                        'required' => 'Alamat harus diisi.',
                        'min_length' => 'Alamat harus memiliki minimal 4 karakter.',
                        'max_length' => 'Alamat harus memiliki maximal 100 karakter.'
                    ]
                ]
            ])) {
                $validation = \Config\Services::validation();
                $data = [
                    'validation' => $validation,
                    'kembali' => "/admin-karyawan",
                    'profile' => '/admin-profile',
                    'halaman' => 'karyawan',
                    'logout' => '/logout',
                    "karyawan" => $data_karyawan->getById($id),
                ];
                return view('pages/admin/karyawan/ubah_karyawan', $data);
            }
        }

        $data = [
            'id_karyawan' => $id,
            'id_akun' => $id_akun,
            'nama' => $this->request->getVar('nama'),
            'lahir' => $this->request->getVar('lahir'),
            'telepon' => $this->request->getVar('telepon'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $data_karyawan->ubah($data);

        $data_flash = [
            'icon' => 'fas fa-check',
            'state' => 'success',
            'message' => 'Data Berhasil Diubah !!',
            'title' => 'Ubah Data',
        ];
        session()->setFlashdata($data_flash);

        return redirect()->to(base_url('admin-karyawan'));
    }

    public function hapus($id)
    {
        $data_karyawan = new ModelKaryawan();
        $data_karyawan->hapus($id);

        $data_flash = [
            'icon' => 'fas fa-check',
            'state' => 'success',
            'message' => 'Data Berhasil Dihapus !!',
            'title' => 'Hapus Data',
        ];
        session()->setFlashdata($data_flash);

        return redirect()->to(base_url('admin-karyawan'));
    }
}
