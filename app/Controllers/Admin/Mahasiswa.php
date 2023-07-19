<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->findAll()
        ];

        return view('mahasiswa', $data);
    }

    public function create()
    {
        return view('create_mahasiswa');
    }

    public function store()
    {
        // Logika untuk menyimpan data mahasiswa yang ditambahkan

        return redirect()->route('admin.mahasiswa.index');
    }

    public function edit($id)
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->find($id)
        ];

        return view('edit_mahasiswa', $data);
    }

    public function update($id)
    {
        // Logika untuk mengupdate data mahasiswa dengan $id tertentu

        return redirect()->route('admin.mahasiswa.index');
    }

    public function delete($id)
    {
        // Logika untuk menghapus data mahasiswa dengan $id tertentu

        return redirect()->route('admin.mahasiswa.index');
    }
}