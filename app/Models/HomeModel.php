<?php
namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'id_brg';
    protected $allowedFields = ['nama_barang', 'sampul', 'lokasi'];

    public function getHome($id_brg = false)
    {
        if ($id_brg == false) {
            return $this->findAll();
        }

        return $this->where(['id_brg' => $id_brg])->first();
    }
}
?>