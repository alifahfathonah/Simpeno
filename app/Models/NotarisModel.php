<?php

namespace App\Models;

use CodeIgniter\Model;

class NotarisModel extends Model
{
    protected $table   = 'notaris';
    protected $id_passanger = 'id_notaris';
    protected $createdField         = 'created_at';

    public function countNotaris()
    {
        $query = $this->db->query("SELECT * FROM notaris");
        $notaris = $query->getNumRows();
        return $notaris;
    }
    //tambah data
    public function insertData($data)
    {
        $this->db->table('notaris')
            ->insert($data);
    }
    //get airlines
    public function getNotaris()
    {
        return $this->db->table('notaris')
            ->join('bulan', 'bulan.id_no_bulan=notaris.id_no_bulan')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=notaris.id_penyimpanan')

            ->get()->getResultArray();
    }
    public function getDetails($id_notaris)
    {
        return $this->db->table('notaris')
            ->join('bulan', 'bulan.id_no_bulan=notaris.id_no_bulan')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=notaris.id_penyimpanan')
            ->where('notaris.id_notaris', $id_notaris)
            ->get()->getResultArray();
    }
    public function editData($data)
    {
        $this->db->table('notaris')
            ->where('id_notaris', $data['id_notaris'])
            ->update($data);
    }
    public function deleteData($id_notaris)
    {
        $query = $this->db->table('notaris')->delete(array('id_notaris' => $id_notaris));
        return $query;
    }
    public function getBulan()
    {
        return $this->db->table('bulan')


            ->get()->getResultArray();
    }
    public function getPenyimpanan()
    {
        return $this->db->table('penyimpanan')

            ->get()->getResultArray();
    }
    public function getData2($first_date, $end_date)
    {
        return $this->db->table('notaris')->join('bulan', 'bulan.id_no_bulan=notaris.id_no_bulan')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=notaris.id_penyimpanan')->where('notaris.created_at >=', $first_date)
            ->where('notaris.created_at <=', $end_date)->get()->getResultArray();
    }
}
