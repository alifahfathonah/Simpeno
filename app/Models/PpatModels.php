<?php

namespace App\Models;

use CodeIgniter\Model;

class PpatModels extends Model
{
    protected $table   = 'ppat';
    protected $id_passanger = 'id_ppat';
    protected $createdField         = 'created_at';

    public function countPpat()
    {
        $query = $this->db->query("SELECT * FROM ppat");
        $ppat = $query->getNumRows();
        return $ppat;
    }
    //tambah data
    public function insertData($data)
    {
        $this->db->table('ppat')
            ->insert($data);
    }
    //get airlines
    public function getPpat()
    {
        return $this->db->table('ppat')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=ppat.id_penyimpanan')

            ->get()->getResultArray();
    }
    public function getDetails($id_ppat)
    {
        return $this->db->table('ppat')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=ppat.id_penyimpanan')
            ->where('ppat.id_ppat', $id_ppat)
            ->get()->getResultArray();
    }
    public function editData($data)
    {
        $this->db->table('ppat')
            ->where('id_ppat', $data['id_ppat'])
            ->update($data);
    }
    public function deleteData($id_ppat)
    {
        $query = $this->db->table('ppat')->delete(array('id_ppat' => $id_ppat));
        return $query;
    }
    public function getPenyimpanan()
    {
        return $this->db->table('penyimpanan')

            ->get()->getResultArray();
    }
    public function getData2($first_date, $end_date)
    {
        return $this->db->table('ppat')
            ->join('penyimpanan', 'penyimpanan.id_penyimpanan=ppat.id_penyimpanan')->where('ppat.created_at >=', $first_date)
            ->where('ppat.created_at <=', $end_date)->get()->getResultArray();
    }
}
