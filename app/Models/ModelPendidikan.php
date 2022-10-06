<?php

namespace App\Models;
use CodeIgniter\Model;

class ModelPendidikan extends Model
{
    protected $table = "tweb_penduduk_pendidikan";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama'];

    protected $validationRules = [
        'nama' => 'required'
    ];

    protected $validationMessages = [
        'nama'=>[
            'required' => 'Silakan masukkan status pendidikan'
        ]
    ];
}