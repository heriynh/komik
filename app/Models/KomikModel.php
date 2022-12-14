<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    
    protected $table            = 'komik';
    protected $primaryKey       = 'id';
	protected $allowedFields = ['judul','slug','penulis','penerbit','sampul'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

	public function getKomik($slug = false)
	{
		if($slug == false) {
				return $this->findAll();
			}
			return $this->where(['slug' => $slug])->first();
	}

}
