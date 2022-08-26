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
    		'komik' => $this->komikModel->getKomik($slug),
    		
    	];
        return view('komik/detail', $data);
    }
    
  
    public function deleted($id)
    {
		$this->komikModel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/komik');
    }
    
      public function edit($slug)
    {
        $data = [
    		'title' => 'Detail komik',
  		  'validation' => \Config\Services::validation(),
    		'komik' => $this->komikModel->getKomik($slug)
    	];
        return view('komik/edit', $data);
    
    }
    
    public function update($id)
    {
    	//cek judul
		$komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    	if($komikLama['judul'] == $this->request->getVar('judul')) {
    		$rule_judul = 'required';
        }else{
        	$rule_judul = 'required|is_unique[komik.judul]';
        }
        
        if(!$this->validate([
		'judul' => [
			'rules' => $rule_judul,
			'errors' => [
				'required' => '{field} Komik harus di isi !',
				'is_unique' => '{field} Komik sudah terdaftar !',
			]
		],
		]))  {
			
			$validation = \Config\Services::validation();
			$data['validation'] = $validation;
			$data['komik'] = $this->request->getVar('slug');
			
			//return view('komik/edit/',$data);
			return redirect()->to('komik/edit/'.$this->request->getVar('slug'))->withInput();
		 }
		
    	$slug = url_title($this->request->getVar('judul'), '-', true);
    	$this->komikModel->save([
    		'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul'),
		]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
    	return redirect()->to('/komik');
    }
    
}