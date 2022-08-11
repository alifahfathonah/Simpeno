<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        helper('form');
    }
    public function index()
    {
        return view('V_login');
    }
    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Wajib diisi!',
                    'valid_email' => 'Harus format email!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi!',
                ],
            ]
        ])) {
            // valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $passwordx = md5($password);
            $cek_login = $this->UsersModel->login_user($email, $passwordx);
            if ($cek_login) {
                session()->set('name', $cek_login['name']);
                session()->set('email', $cek_login['email']);
                session()->set('status', $cek_login['status']);
                session()->set('image', $cek_login['image']);
                session()->set('id_user', $cek_login['id_user']);

                return redirect()->to(base_url('/Dashboard'));
            } else {
                session()->setFlashdata('pesan', 'Email atau Password salah!');
                return redirect()->to(base_url('V_login'));
            }
        } else {
            // tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('V_login'));
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('V_login'));
    }
}
