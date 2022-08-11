<?php

namespace App\Controllers;

use App\Models\NotarisModel;
use App\Models\UsersModel;

class Notaris extends BaseController
{
    public function __construct()
    {

        $this->Notaris = new NotarisModel();
        $this->admin = new UsersModel();
        helper('form');
    }

    public function index()
    {
        if (session()->get('name') == True) {

            $data = [
                'title' => 'Halaman | Notaris',
                'notaris' => $this->Notaris->getNotaris(),
                'user' => $this->admin->getData()

            ];
            // dd($data);
            return view('Notaris/V_notaris', $data);
        } else {
            return redirect()->to('V_login');
        }
    }


    public function Add()
    {

        $data = [
            'title' => 'Admin | Notaris',
            'bulan' => $this->Notaris->getBulan(),
            'penyimpanan' => $this->Notaris->getPenyimpanan(),
            'user' => $this->admin->getData()
        ];
        //dd($data);
        return view('Notaris/V_add_notaris', $data);
    }
    public function insertData()
    {
        $data = [
            'nomor_urut' => $this->request->getPost('nomor_urut'),
            'id_no_bulan' => $this->request->getPost('id_no_bulan'),
            'tgl_akta' => $this->request->getPost('tgl_akta'),
            'sifat_akta' => $this->request->getPost('sifat_akta'),
            'nama_penghadap_1' => $this->request->getPost('nama_penghadap_1'),
            'nama_penghadap_2' => $this->request->getPost('nama_penghadap_2'),
            'nama_penghadap_3' => $this->request->getPost('nama_penghadap_3'),
            'nama_pt' => $this->request->getPost('nama_pt'),
            'id_penyimpanan' => $this->request->getPost('id_penyimpanan'),

        ];

        $this->Notaris->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan..');
        return redirect()->to('/Notaris');
    }
    public function getDetail($id_notaris)
    {

        $data = [
            'title' => 'Notaris | Detail',
            'Detail' => $this->Notaris->getDetails($id_notaris),
            'user' => $this->admin->getData()

        ];
        return view('Notaris/V_detail', $data);
    }
    public function getUpdate($id_notaris)
    {

        $data = [
            'title' => 'Notaris | Update',
            'Update' => $this->Notaris->getDetails($id_notaris),
            'bulan' => $this->Notaris->getBulan(),
            'penyimpanan' => $this->Notaris->getPenyimpanan(),
            'user' => $this->admin->getData()
        ];

        return view('Notaris/V_update', $data);
    }
    public function EditAction($id_notaris)
    {


        $data = [
            'id_notaris' => $id_notaris,
            'nomor_urut' => $this->request->getPost('nomor_urut'),
            'id_no_bulan' => $this->request->getPost('id_no_bulan'),
            'tgl_akta' => $this->request->getPost('tgl_akta'),
            'sifat_akta' => $this->request->getPost('sifat_akta'),
            'nama_penghadap_1' => $this->request->getPost('nama_penghadap_1'),
            'nama_penghadap_2' => $this->request->getPost('nama_penghadap_2'),
            'nama_penghadap_3' => $this->request->getPost('nama_penghadap_3'),
            'nama_pt' => $this->request->getPost('nama_pt'),
            'id_penyimpanan' => $this->request->getPost('id_penyimpanan')
        ];
        $this->Notaris->editData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('/Notaris');
    }
    public function deleteData($id_notaris)
    {

        $this->Notaris->deleteData($id_notaris);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('/Notaris');
    }
}
