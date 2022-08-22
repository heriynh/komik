<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
class Komik extends BaseController
{
    public function komik()
    {
    	$db = \Config\Database::connect();
    	$komik = $db->query("SELECT * FROM komik");
    	dd($komik);
    
        return view('komik/index');
    }
}