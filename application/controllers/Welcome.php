<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_tuto');
	}

	public function index(){
		$this->showRegisterView();
	}

	public function addStudent(){
		$data = $this->input->post();

		$info = array(
				'idEstudiante'	=> 	'',
				'nombre'		=> 	$data['nombre'],
				'apellidos'		=> 	$data['apellidos'],
				'edad'			=> 	$data['edad'],
				'email'			=> 	$data['email']
			);

		$this->m_tuto->insertIntoEstudiante($info);
	}

	public function showRegisterView(){
		$this->load->view('registration');
	}

	public function showStudents(){
		$query['students'] = $this->m_tuto->getStudents();
		$this->load->view('students', $query);
	}
}
