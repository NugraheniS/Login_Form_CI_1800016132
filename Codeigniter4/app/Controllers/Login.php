<?php namespace App\Controllers;
use App\Models\Mdl_user;

class Login extends BaseController
{
	public function index()
	{
		return view('form');
    }

    public function login_action()
    {
        $mduser = new Mdl_user();

        $username = $this->request->getPost('username'); 
        $password = $this->request->getPost('password');

        $cek = $mduser->get_data($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password))
        {
            session()->set('username', $cek['username']);
            session()->set('nama', $cek['nama']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('user'));
        } else {
            session()->setFlashdata('gagal', 'Incorrect username or password');
            return redirect()->to(base_url('login'));
        }
    }
     
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
	//--------------------------------------------------------------------

}
