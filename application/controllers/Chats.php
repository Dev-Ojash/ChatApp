<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chats extends CI_Controller {
  	private $perPage = 7;

	public function index()
	{
		$this->load->view('login');
	}

	public function galleryfileupload()
	{
		$config['allowed_types'] = 'jpg|png|jpeg|mp4|mkv';
		$config['upload_path'] = './img/chat_media/gallery/';
		$config['overwrite'] = true;

		$this->load->library('upload',$config);
		if($this->upload->do_upload('file'))
		{
			$arr = $this->upload->data();
			// public function send_msg($msg,$reciver,$replied,$file=null)

			//         public function send_msg($msg,$reciver,$replied,$file_path=null,$file_type=null,$file_ext=null)

			$multiData = array('chat_id' => $this->session->userdata("chatID"));
            $reciver = $this->chat_model->get_chat_name($multiData['chat_id']);
            $file_path = base_url()."img/chat_media/gallery/".$arr['file_name'];
			$status = $this->chat_model->send_msg($arr['orig_name'],
												$reciver,
												false,
												$file_path,
												$arr['file_type'],
												$arr['file_ext'],
												$arr['file_size']
											);
			echo ($status);
		}
		else{
			print_r($this->upload->display_errors());
		
		}
	}
	public function audiofileupload()
	{
		$config['allowed_types'] = 'jpg|png|jpeg|mp4|mkv';
		$config['upload_path'] = './img/chat_media/audio/';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('file'))
		{
			$arr = $this->upload->data();
			// public function send_msg($msg,$reciver,$replied,$file=null)

			// print_r($this->upload->data());
			$multiData = array('chat_id' => $this->session->userdata("chatID"));
            $reciver = $this->chat_model->get_chat_name($multiData['chat_id']);
            $file_path = base_url()."img/chat_media/audio/".$arr['file_name'];
			$status = $this->chat_model->send_msg($arr['orig_name'],
												$reciver,
												false,
												$file_path,
												$arr['file_type'],
												$arr['file_ext'],
												$arr['file_size']
											);
			echo ($status);
		}
		else{
			print_r($this->upload->display_errors());
		
		}
	}
	public function documentfileupload()
	{
		$config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|xlsx|';
		$config['upload_path'] = './img/chat_media/documents/';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('file'))
		{
			$arr = $this->upload->data();
			$multiData = array('chat_id' => $this->session->userdata("chatID"));
            $reciver = $this->chat_model->get_chat_name($multiData['chat_id']);
           	$file_path = base_url()."img/chat_media/documents/".$arr['file_name'];
			$status = $this->chat_model->send_msg($arr['orig_name'],
												$reciver,
												false,
												$file_path,
												$arr['file_type'],
												$arr['file_ext'],
												$arr['file_size']
											);
			echo ($status);
		}
		else{
			print_r($this->upload->display_errors());
		
		}
	}

	public function list_chats()
	{
		$userdata = $this->session->userdata('userid');
		$status = $this->chat_model->list_chats($userdata);
		echo json_encode($status);
	}
	public function add_chat()
	{
		$user2= $this->input->post('user');
		$user2id = $this->user_model->getid($user2);
		$user1 = $this->session->userdata('name');
		$user1id = $this->user_model->getid($user1);

		$status = $this->chat_model->add_new_chat($user1id,$user2id);
		echo json_encode($status);
	}

	public function search()
	{
		$chatid = $this->session->userdata('chatID');

		$searchtext = $this->input->post('text');
		if($searchtext == "")
		{
			$status = $this->chat_model->list_old_msg(7,0);
			echo json_encode($status);
		}
		else
		{
			$status = $this->chat_model->searchMsg($searchtext,$chatid);
			echo json_encode($status);
		}
	}

	public function delele_message()
	{
		$msgid = $this->input->post('msgid');
		$msg = $this->input->post('delmsg');
		$status = $this->chat_model->delete_message($msgid,$msg);
		echo json_encode($status);
	}

	public function get_msg()
	{
		$msgid = $this->input->post('msgid');
		$status = $this->chat_model->get_message($msgid);
		echo json_encode($status);
	}

	public function edit_message()
	{
		$msgid = $this->input->post('msgid');
		$msg = $this->input->post('msg');
		$status = $this->chat_model->edit_message($msgid,$msg);
		echo json_encode($status);
	}

	public function getmsginfo()
	{
		$msgid = $this->input->post('id');
		$status = $this->chat_model->getmsginfo($msgid);
		echo json_encode($status);

	}
	public function load_fav_msg()
	{		
		$chatid = $this->input->post('chatid');
		if($chatid)
		{
        	$this->session->set_userdata('chatID',$chatid);
        	$status = $this->chat_model->list_all_messages($chatid);
   	        echo json_encode($status);
		}
	}

	public function load_messages()
	{
			$this->load->view('Quickchat');
			$data = $this->input->get('chatid');
			if($data)
			{
	        	$this->session->set_userdata('chatID',$data);
			}
		
		// $userdata['sender_id'] = $this->session->userdata('userid');
		// $status = $this->chat_model->list_messages($userdata);

	}
	public function list_messages()
	{
        $id = $this->session->userdata('chatID');
        $status = $this->chat_model->list_messages($id);
        echo json_encode($status);

		// $userdata['sender_id'] = $this->session->userdata('userid');
		// $status = $this->chat_model->list_messages($userdata);

	}

	public function send_message()
	{

		$msg = $this->input->post('message');
		$reciver = $this->input->post('reciver');
		$replied = $this->input->post('reply');
		if($this->input->post('message') && $this->input->post('reciver'))
		{
			$response = $this->chat_model->send_msg($msg,$reciver,$replied);
			echo json_encode($response);
		}
		else
		{
			return false;
		}
	}

	public function set_msg_read()
	{
		$msg = $this->input->post('msgid');
		$response = $this->chat_model->set_readed($msg);
		return $response;

	}

	public function get_new_msg()
	{
		$id = $this->session->userdata('chatID');
		$status = $this->chat_model->list_new_msg($id);
        echo json_encode($status);

	}


	public function AddtoFav()
	{
		$msgid = $this->input->post('msgid');
		$status = $this->chat_model->addToFav($msgid);
        echo json_encode($status);

	}
	public function list_fav()
	{
		$status = $this->chat_model->list_Fav();
        echo json_encode($status);

	}

	public function searchFriend()
	{
		$frd = $this->input->post('search');
		$status = $this->chat_model->search_frd($frd);
		echo json_encode($status);	
	}


	// public function on_scroll_msg_load()
	// {
	// 	$id = $this->session->userdata('chatID');
	// 	if(!empty($this->input->get("page")))
	// 	{
	// 		$start = ceil($this->input->get("page") * $this->perPage);
	// 		$status = $this->chat_model->list_old_msg($start,$this->perPage,$id);
	// 	}
	// 	else
	// 	{
	// 		$id = $this->session->userdata('chatID');
	// 		$status = $this->chat_model->list_old_msg(5,$this->perPage,$id);
	// 	}
	// 	echo json_encode($status);

	// }
	public function on_scroll_msg_load()
	{

		$status = $this->chat_model->list_old_msg($this->input->post('limit'), $this->input->post('start'));
		if($status != false)
		{
			echo json_encode($status);
		}
	}
	


	public function temp()
	{
		$status = $this->chat_model->get_user_status(2);
		print_r($status[0]['status']);

	}

	public function getpined()
	{
		$status = $this->chat_model->getpined();
		echo json_encode($status);
	}


	public function pinchat()
	{
		$chatid = $this->input->post('chatid');
		$status = $this->chat_model->pinchat($chatid);
		echo json_encode($status);

	}

	public function unpinchat()
	{
		$chatid= $this->input->post('chatid');
		$status = $this->chat_model->unpinchat($chatid);
		echo json_encode($status);

	}



}
