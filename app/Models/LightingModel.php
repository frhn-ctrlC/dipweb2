<?php

namespace App\Models;

use CodeIgniter\Model;

class LightingModel extends Model
{
    protected $table            = 'lighting';
    protected $primaryKey       = 'id_lig';

    protected $allowedFields    = [
        'nama_lig',
        'lok_lig',
        'kategori_lig',
        'sampul_lig'
    ];
}
