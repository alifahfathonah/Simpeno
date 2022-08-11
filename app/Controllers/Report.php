<?php

namespace App\Controllers;

use App\Models\NotarisModel;
use App\Models\PpatModels;
use App\Models\UsersModel;
use \Dompdf\Dompdf;
use \Dompdf\Options;

class Report extends BaseController
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
        if (session()->get('name') == True) {
            $first_date = $this->request->getPost('first_date');
            $end_date = $this->request->getPost('end_date');
            $data = [
                'title' => 'Halaman | Notaris',
                'notaris' => $this->Notaris->getNotaris($first_date, $end_date),
                'first_date' => $first_date,
                'end_date' => $end_date,
                'user' => $this->admin->getData()
            ];

            return view('Notaris/index', $data);
        } else {
            return redirect()->to('login/V_login');
        }
    }
    public function index3()
    {
        if (session()->get('name') == True) {
            $first_date = $this->request->getPost('first_date');
            $end_date = $this->request->getPost('end_date');
            $data = [
                'title' => 'Halaman | Notaris',
                'notaris' => $this->Notaris->getNotaris($first_date, $end_date),
                'first_date' => $first_date,
                'end_date' => $end_date,
                'user' => $this->admin->getData()
            ];

            return view('User2/V_Notaris', $data);
        } else {
            return redirect()->to('V_login');
        }
    }
    public function index4()

    {
        if (session()->get('name') == True) {
            $first_date = $this->request->getPost('first_date');
            $end_date = $this->request->getPost('end_date');
            $data = [
                'title' => 'Halaman | PPAT',
                'Ppat' => $this->ppat->getPpat($first_date, $end_date),
                'first_date' => $first_date,
                'end_date' => $end_date,
                'user' => $this->admin->getData()
            ];
            return view('User2/V_PPAT', $data);
        } else {
            return redirect()->to('V_login');
        }
    }
    public function index2()
    {
        if (session()->get('name') == True) {
            $first_date = $this->request->getPost('first_date');
            $end_date = $this->request->getPost('end_date');
            $data = [
                'title' => 'Halaman | PPAT',
                'Ppat' => $this->ppat->getPpat($first_date, $end_date),
                'first_date' => $first_date,
                'end_date' => $end_date,
                'user' => $this->admin->getData()
            ];

            return view('ppat/index', $data);
        } else {
            return redirect()->to('V_login');
        }
    }
    public function getData()
    {
        $first_date = $this->request->getPost('first_date');
        $end_date = $this->request->getPost('end_date');
        $data = [
            'title' => 'Halaman | Notaris',
            'notaris' => $this->Notaris->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date,
            'user' => $this->admin->getData()
        ];

        return view('Notaris/index', $data);
    }
    public function getData2()
    {
        $first_date = $this->request->getPost('first_date');
        $end_date = $this->request->getPost('end_date');
        $data = [
            'title' => 'Halaman | PPAT',
            'Ppat' => $this->ppat->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date,
            'user' => $this->admin->getData()
        ];

        return view('ppat/index', $data);
    }
    public function getData3()
    {
        $first_date = $this->request->getPost('first_date');
        $end_date = $this->request->getPost('end_date');
        $data = [
            'title' => 'Halaman | Notaris',
            'notaris' => $this->Notaris->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date,
            'user' => $this->admin->getData()
        ];

        return view('User2/V_Notaris', $data);
    }
    public function getData4()
    {
        $first_date = $this->request->getPost('first_date');
        $end_date = $this->request->getPost('end_date');
        $data = [
            'title' => 'Halaman | PPAT',
            'Ppat' => $this->ppat->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date,
            'user' => $this->admin->getData()
        ];

        return view('User2/V_PPAT', $data);
    }

    public function print($first_date, $end_date)
    {


        $data = [
            'title' => 'Halaman | Report',
            'notaris' => $this->Notaris->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date
        ];

        // return  view('Notaris/print', $data);
        $html = view('Report/print', $data);
        $option = new Options();
        $option->setIsRemoteEnabled(true);
        $option->setIsHtml5ParserEnabled(true);
        $dompdf = new Dompdf($option);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
    public function print2($first_date, $end_date)
    {


        $data = [
            'title' => 'Halaman | Report',
            'Ppat' => $this->ppat->getData2($first_date, $end_date),
            'first_date' => $first_date,
            'end_date' => $end_date
        ];

        //return  view('Report/print2', $data);
        $html = view('Report/print2', $data);
        $option = new Options();
        $option->setIsRemoteEnabled(true);
        $option->setIsHtml5ParserEnabled(true);
        $dompdf = new Dompdf($option);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
