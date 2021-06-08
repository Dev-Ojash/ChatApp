<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Blogin');
	}

	public function load_login()
	{
		$this->load->view('Blogin');

	}

	public function regester()
	{
		$this->load->view('regester');

	}

	public function reg_check()
	{
		$name = $this->input->post('user_name');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));
		$status = $this->user_model->reg_check($name,$email,$pass);
		if($status)
		{
			echo "<script>alert('Regestration successfull!');</script>";
			$this->load->view('Blogin');

		}
		
	}

	
	public function tmp()
	{
		$this->load->view('temp');
	}

	public function load_Home()
	{
		$this->load->view('Blogin');

	}

	public function load_lobby()
	{
		// $status['records'] = $this->user_model->select_users();
		// print_r($status);
		$this->load->view('lobby');
	}
	public function list_users()
	{
		$status = $this->user_model->select_users();
		// print_r($status);
		echo json_encode($status);
		// $this->load->view('lobby');
	}

	public function load_chat()
	{
		$this->load->view('Quickchat');
	}

	// public function load_chats()
	// {
	// 	$this->load->view('chat_room');
	// }

	public function login()
	{
		$postData = $this->input->post();
		$multiClause = array('email' => $postData['email'],
 					'password' => md5($postData['password']));
		$status = $this->user_model->login_check($multiClause);
		if($status)
		{
			if($status->modify_chat_role == 1)
			{
				echo "<script>alert('Welcome To ChatApp');</script>";
				$this->load->view('Quickchat');
                $this->session->set_userdata('user_role','modify_chat_role');
                $status->reply_chat_role = 0;
                $status->view_chat_role = 0;
                $this->session->set_userdata('status_var',$status);
				$status = $this->user_model->set_status(true);

			}
			elseif($status->reply_chat_role == 1 && $status->modify_chat_role == 0)
			{
				echo "<script>alert('Welcome To ChatApp');</script>";
				$this->load->view('Quickchat');
                $this->session->set_userdata('user_role','reply_chat_role');
                $status->view_chat_role = 0;
                $this->session->set_userdata('status_var',$status);
				$status = $this->user_model->set_status(true);

			}
			elseif($status->view_chat_role == 1 && $status->reply_chat_role == 0 && $status->modify_chat_role == 0)
			{
				echo "<script>alert('Welcome To ChatApp');</script>";
				$this->load->view('Quickchat');
                $this->session->set_userdata('user_role','view_chat_role');
                $this->session->set_userdata('status_var',$status);
				$status = $this->user_model->set_status(true);
			}
			else
			{
				echo "<script>alert('Welcome To ChatApp');</script>";
				echo "<script>alert('You Dont have Rights To Use This App!');</script>";
                $this->session->set_userdata('user_role','view_chat_role');
   				$this->load->view('Blogin');
			}
			// $this->load_lobby();
		}
		if($status == false)
		{
			echo "<script>alert('Incorrect uername or password');</script>";
			$this->load->view('Blogin');
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->user_model->set_status(false);

		$this->index();
	}
}
