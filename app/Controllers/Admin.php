<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    public function __construct()
    {

        $this->admin = new UsersModel();
        helper('form');
    }

    public function index()
    {
        if (session()->get('name') == True) {

            $data = [

                'title' => 'Halaman | Admin',
                'user' => $this->admin->getData()
            ];
            return view('Admin/V_admin', $data);
        } else {
            return redirect()->to('login/V_login');
        }
    }
    public function Add()
    {
        $data = [
            'title' => 'Add | Admin',
            'user' => $this->admin->getData()
        ];
        return view('Admin/V_add_admin', $data);
    }
    public function insertData()
    {
        $password = $this->request->getPost('password');
        $passwordx = md5($password);
        $image = $this->request->getFile('image');
        $nama_file = $image->getRandomName();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $passwordx,
            'status' => $this->request->getPost('status'),
            'image' => $nama_file
        ];
        $image->move('foto/', $nama_file);
        $this->admin->insertData($data);
        session()->setFlashdata('Pesan', 'Congratulation you have successfully registered..');
        return redirect()->to('/Admin');
    }
    public function getDetail($id_user)
    {

        $data = array(
            'title' => 'Admin | Detail',
            'Detail' => $this->admin->getDetail($id_user),
            'user' => $this->admin->getData()

        );
        return view('Admin/V_detail', $data);
    }
    public function getUpdate($id_user)
    {
        $data = array(
            'title' => 'Admin | Update',
            'Update' => $this->admin->getDetail($id_user),
            'user' => $this->admin->getData()

        );
        return view('Admin/V_update', $data);
    }
    public function EditAction($id_user)
    {


        $file = $this->request->getFile('image');
        if ($file->getError() == 4) {
            $data = [
                'id_user' => $id_user,
                'name' => $this->request->getPost('name'),
                'password' => md5($this->request->getPost('password')),
                'email' => $this->request->getPost('email'),
                'status' => $this->request->getPost('status')
            ];

            $this->admin->editData($data);
        } else {
            $file = $this->request->getFile('image');
            $nama_file = $file->getRandomName();
            $data = [
                'id_user' => $this->request->getPost('id_user'),
                'name' => $this->request->getPost('name'),
                'password' => md5($this->request->getPost('password')),
                'email' => $this->request->getPost('email'),
                'status' => $this->request->getPost('status'),
                'image' => $nama_file
            ];
            $file->move('foto/', $nama_file);
            $this->admin->editData($data);
        }

        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah.');
        return redirect()->to('/Admin');
    }
    public function deleteData($id_user)
    {

        $this->admin->deleteData($id_user);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus.');
        return redirect()->to('/Admin');
    }
}
