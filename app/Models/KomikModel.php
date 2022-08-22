<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    
    protected $table            = 'komik';
    protected $primaryKey       = 'id';


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


}
