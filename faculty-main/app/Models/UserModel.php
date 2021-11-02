<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'faculty_table';
  protected $primaryKey = 'fac_id';
  protected $allowedFields = ['fac_id', 'fac_name'];

}
