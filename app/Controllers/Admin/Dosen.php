<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DosenModel;

class Dosen extends BaseController
{
    protected $dosenModel;

    public function __construct()
    {
        $this->dosenModel = new DosenModel();
    }

    public function index()
    {
        $data = [
            'dosen' => $this->dosenModel->findAll()
        ];

        return view('dosen', $data);
    }

    public function create()
    {
        return view('create_dosen');
    }

    public function store()
    {
        // Logika untuk menyimpan data dosen yang ditambahkan

        return redirect()->route('admin.dosen.index');
    }

    public function edit($id)
    {
        $data = [
            'dosen' => $this->dosenModel->find($id)
        ];

        return view('edit_dosen', $data);
    }

    public function update($id)
    {
        // Logika untuk mengupdate data dosen dengan $id tertentu

        return redirect()->route('admin.dosen.index');
    }

    public function delete($id)
    {
        // Logika untuk menghapus data dosen dengan $id tertentu

        return redirect()->route('admin.dosen.index');
    }
}