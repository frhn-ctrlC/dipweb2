<?php

namespace App\Models;

use CodeIgniter\Model;

class ModifierModel extends Model
{
    protected $table            = 'modifier';
    protected $primaryKey       = 'id_mod';

    protected $allowedFields    = [
        'nama_mod',
        'lok_mod',
        'kategori_mod',
        'sampul_mod'
    ];
}
