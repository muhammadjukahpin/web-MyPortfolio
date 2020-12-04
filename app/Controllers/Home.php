<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['validation'] = \Config\Services::validation();
		return view('index',$data);
	}

	public function save()
	{
		if (!$this->validate([
			'name' => 'required',
			'email' => 'required|valid_email',
			'message' => 'required'
		])) {
			return redirect()->to('/home/index#kontak')->withInput();
		}

		$email = \Config\Services::email();
		$email->setFrom('merhkolor@gmail.com', 'Pengunjung');
		$email->setTo('muhamadjukahpin@gmail.com');
		$email->setSubject('Pengunjung Website');
		$email->setMessage('Email : ' . htmlspecialchars($this->request->getPost('email')) .
			'<br> Nama : ' . htmlspecialchars($this->request->getPost('name')) .
			'<br> Pesan : ' . htmlspecialchars($this->request->getPost('message')));
		if (!$email->send()) {
			session()->setFlashdata('message', 'failed-send');
			return redirect()->to('/');
		} else {
			session()->setFlashdata('message', 'success-send');
			return redirect()->to('/');
		}
	}

	//--------------------------------------------------------------------

}
