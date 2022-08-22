<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function home()
    {
        return view('pages/home');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function contact()
    {
    	$data = [
    	'title' => 'Contact us',
    	'alamat' => [
    			[
    				'type' => 'rumah',
    				'alamat' => 'JL. Poros Majene-Mamuju Km 45',
    				'kota' => 'Majene',
    			],
    			[
    				'type' => 'kantor',
    				'alamat' => 'JL. Poros Majene-Mamuju Km 45',
    				'kota' => 'Mamuju',
    			],
    	]
    	];
        return view('pages/contact', $data);
    }
}
