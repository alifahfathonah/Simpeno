<?php

namespace App\Controllers;

use App\Models\NotarisModel;
use App\Models\PpatModels;
use App\Models\UsersModel;

class Home extends BaseController
{
    public function __construct()
    {

        $this->Notaris = new NotarisModel();
        $this->ppat = new PpatModels();
        $this->admin = new UsersModel();

        helper('form');
    }

    public function index()
    {
        return view('V_utama');
    }
    public function Dashboard()
    {
        if (session()->get('name') == True) {

            $data = [

                'title' => 'Halaman | Dashborad',
                'notaris' => $this->Notaris->countNotaris(),
                'ppat' => $this->ppat->countPpat(),
                'user' => $this->admin->getData()
            ];

            return view('V_dashboard', $data);
        } else {
            return redirect()->to('V_login');
        }
    }
}
