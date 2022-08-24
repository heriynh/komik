<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;
class Komik extends BaseController
{
	protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}
    public function index()
    {
    	$data = [
    		'title' => 'Daftar komik',
    		'komik' => $this->komikModel->getKomik()
    	];
        return view('komik/index', $data);
    }
    
    public function create()
    {
    	$data = [
    		'title' => 'Create komik',
    		'validation' => \Config\Services::validation()
    	];
        return view('komik/create', $data);
    }
    
    public function save()
    {
    	if(!$this->validate([
		'judul' => [
			'rules' => 'required|is_unique[komik.judul]',
			'errors' => [
				'required' => '{field} Komik harus di isi !',
				'is_unique' => '{field} Komik sudah terdaftar !',
			]
		],
		])) {
			$validation = \Config\Services::validation();
			$data['validation'] = $validation;
			return view('komik/create', $data);
			//return redirect()->to('komik/create')->withInput()->with('validation', $validation);
		}
		
    	$slug = url_title($this->request->getVar('judul'), '-', true);
    	$this->komikModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul'),
		]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    	return redirect()->to('/komik');
    }
    
    public function detail($slug)
    {
    	$data = [
    		'title' => 'Detail komik',
    		'komik' => $this->komikModel->getKomik($slug)
    	];
        return view('komik/detail', $data);
    }
    public function deleted($id)
    {
		$this->komikModel->delete($id);
        return redirect()->to('/komik');
    }
}