<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class M_tuto extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function insertIntoEstudiante($data){
			$this->db->insert('Estudiante', $data);
		}

		public function getStudents(){
			return $this->db->get('Estudiante')->result_array();

		}
	}
?>