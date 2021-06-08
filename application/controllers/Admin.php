<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$postData = $this->input->post();
		$multiClause = array('email' => $postData['email'],
 					'password' => md5($postData['password']));
		$status = $this->Admin_model->login_check($multiClause);
		if($status == true)
		{
			echo "<script>alert('Welcome To ChatApp');</script>";
			// $this->load_lobby();
			$this->load->view('admin/manage_users');
			$status = $this->Admin_model->set_status(true);
		}
		if($status == false)
		{
			echo "<script>alert('Incorrect uername or password');</script>";
			$this->load->view('admin/login');
		}

	}

	public function users()
	{

		$res = $this->Admin_model->list_users();
		echo json_encode($res);
	}

	public function edit_permitions()
	{
		$uid = $this->input->post('uid');
		$role = $this->input->post('role');
		$toggle = $this->input->post('toggle');
		$res = $this->Admin_model->edit_roles($uid,$role,$toggle);
		// echo json_encode($this->input->post());
		echo json_encode($res);

	}

	public function delete_user()
	{
		$uid = $this->input->post('uid');
		$res = $this->Admin_model->del_user($uid);
		echo json_encode($res);
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	
}
