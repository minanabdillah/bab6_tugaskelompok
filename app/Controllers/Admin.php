<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\DosenModel;

class Admin extends BaseController
{
    public function mahasiswa()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('mahasiswa', $data);
    }

    public function dosen()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();

        return view('dosen', $data);
    }

    public function createMahasiswa()
    {
        return view('create_mahasiswa');
    }

    public function storeMahasiswa()
    {
        $model = new MahasiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'semester' => $this->request->getPost('semester')
        ];
        $model->insert($data);

        return redirect()->to(site_url('mahasiswa'));
    }

    public function editMahasiswa($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id);

        return view('edit_mahasiswa', $data);
    }

    public function updateMahasiswa($id)
    {
        $model = new MahasiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'semester' => $this->request->getPost('semester')
        ];
        $model->update($id, $data);

        return redirect()->to(site_url('mahasiswa'));
    }

    public function deleteMahasiswa($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);

        return redirect()->to(site_url('mahasiswa'));
    }

    public function createDosen()
    {
        return view('create_dosen');
    }

    public function storeDosen()
    {
        $model = new DosenModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan')
        ];
        $model->insert($data);

        return redirect()->to(site_url('dosen'));
    }

    public function editDosen($id)
    {
        $model = new DosenModel();
        $data['dosen'] = $model->find($id);

        return view('edit_dosen', $data);
    }

    public function updateDosen($id)
    {
        $model = new DosenModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan')
        ];
        $model->update($id, $data);

        return redirect()->to(site_url('dosen'));
    }

    public function deleteDosen($id)
    {
        $model = new DosenModel();
        $model->delete($id);

        return redirect()->to(site_url('dosen'));
    }
}