<?php namespace App\Models;
use CodeIgniter\Model;

class Mdl_user extends Model
{
	public function get_data($username, $password)
	{
        return $this->db->table('user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
	}

	//--------------------------------------------------------------------

}
