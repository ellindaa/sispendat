<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';
    protected $allowedFields = ['n_guru'];
    protected $allowedFields = ['gjekel'];
    protected $allowedFields = ['status'];


}
