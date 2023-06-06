<?php

namespace App\Models;

use CodeIgniter\Model;

class BussinessUnitsModel extends Model
{

    protected $table = 'ci_bussiness_units';

    protected $primaryKey = 'id_bu';

    // get all fields of user roles table
    protected $allowedFields = ['id_bu', 'bu_name', 'status', 'created_at', 'updated_at'];

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
