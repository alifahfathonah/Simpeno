<?php

namespace App\Controllers;


use App\Models\PpatModels;
use App\Models\UsersModel;

class Ppat extends BaseController
{
    public function __construct()
    {

        $this->ppat = new PpatModels();
        $this->admin = new UsersModel();
        helper('form');
    }
    public function index()
    {
        if (session()->get('name') == True) {
            $data = [
                'title' => 'Halaman | PPAT',
                'Ppat' => $this->ppat->getPpat(),
                'user' => $this->admin->getData()
            ];
            return view('ppat/V_ppat', $data);
        } else {
            return redirect()->to('V_login');
        }
    }
    public function Add()
    {
        $data = [
            'title' => 'Add | PPAT',
            'penyimpanan' => $this->ppat->getPenyimpanan(),
            'user' => $this->admin->getData()
        ];
        return view('ppat/V_add_ppat', $data);
    }
    public function insertData()
    {
        $data = [
            'no_urut' => $this->request->getPost('no_urut'),
            'no_akta' => $this->request->getPost('no_akta'),
            'tgl_akta' => $this->request->getPost('tgl_akta'),
            'bentuk_perbuatan' => $this->request->getPost('bentuk_perbuatan'),
            'pihak_pemberi' => $this->request->getPost('pihak_pemberi'),
            'pihak_penerima' => $this->request->getPost('pihak_penerima'),
            'jenis_no_hak' => $this->request->getPost('jenis_no_hak'),
            'letak_tanah_bangunan' => $this->request->getPost('letak_tanah_bangunan'),
            'luas_tanah' => $this->request->getPost('luas_tanah'),
            'luas_bangunan' => $this->request->getPost('luas_bangunan'),
            'harga_pengalihan' => $this->request->getPost('harga_pengalihan'),
            'nama_pt' => $this->request->getPost('nama_pt'),
            'alamat_pemberi' => $this->request->getPost('alamat_pemberi'),
            'alamat_penerima' => $this->request->getPost('alamat_penerima'),
            'id_penyimpanan' => $this->request->getPost('id_penyimpanan')

        ];

        $this->ppat->insertData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan..');
        return redirect()->to('/PPAT');
    }
    public function getDetail($id_ppat)
    {

        $data = array(
            'title' => 'Notaris | Detail',
            'Detail' => $this->ppat->getDetails($id_ppat),
            'user' => $this->admin->getData()

        );
        return view('Ppat/V_detail', $data);
    }
    public function getUpdate($id_ppat)
    {
        $data = array(
            'title' => 'Notaris | Update',
            'Update' => $this->ppat->getDetails($id_ppat),
            'penyimpanan' => $this->ppat->getPenyimpanan(),
            'user' => $this->admin->getData()
        );
        return view('ppat/V_update', $data);
    }
    public function EditAction($id_ppat)
    {
        $data = [
            'id_ppat' => $id_ppat,
            'no_urut' => $this->request->getPost('no_urut'),
            'no_akta' => $this->request->getPost('no_akta'),
            'tgl_akta' => $this->request->getPost('tgl_akta'),
            'bentuk_perbuatan' => $this->request->getPost('bentuk_perbuatan'),
            'pihak_pemberi' => $this->request->getPost('pihak_pemberi'),
            'pihak_penerima' => $this->request->getPost('pihak_penerima'),
            'jenis_no_hak' => $this->request->getPost('jenis_no_hak'),
            'letak_tanah_bangunan' => $this->request->getPost('letak_tanah_bangunan'),
            'luas_tanah' => $this->request->getPost('luas_tanah'),
            'luas_bangunan' => $this->request->getPost('luas_bangunan'),
            'harga_pengalihan' => $this->request->getPost('harga_pengalihan'),
            'nama_pt' => $this->request->getPost('nama_pt'),
            'alamat_pemberi' => $this->request->getPost('alamat_pemberi'),
            'alamat_penerima' => $this->request->getPost('alamat_penerima'),
            'id_penyimpanan' => $this->request->getPost('id_penyimpanan')
        ];

        $this->ppat->editData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('/PPAT');
    }
    public function deleteData($id_ppat)
    {

        $this->ppat->deleteData($id_ppat);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('/PPAT');
    }
}
