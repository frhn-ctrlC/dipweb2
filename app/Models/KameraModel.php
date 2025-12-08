<?php

namespace App\Models;

use CodeIgniter\Model;

class KameraModel extends Model
{
    protected $table            = 'kamera';
    protected $primaryKey       = 'id_cam';

    protected $allowedFields    = [
        'nama_cam',
        'lok_cam',
        'kategori_cam',
        'sampul_cam'
    ];
}
