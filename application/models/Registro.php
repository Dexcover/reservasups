<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
					
	}


	public function registrar($email,$hoy,$cantidad){
		$this->db->where('CORREO', $email);
		$query=$this->db->get('RESERVA');
		$pass=false;
		foreach ($query->result() as $row) {
			$pass=true;
		}

		if($pass){
			return true;
		}else{
			$data = array('CORREO' => $email,
			'FECHA'=>$hoy,
			'CANTIDAD'=>$cantidad );
			$this->db->insert('RESERVA',$data);
		}


	
		return $pass;
	}

}

/* End of file Registro.php */
/* Location: ./application/models/Registro.php */