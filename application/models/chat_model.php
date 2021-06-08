<?php
class chat_model extends CI_Model {


      	public function findReciver()
      	{
      		$arr = $this->session->userdata('name');
      		$this->db->where('user1',$arr); 
        	$this->db->or_where('user2',$arr); 
  			$query = $this->db->get('tbl_chat'); 
	        $data = $query->result();
	        return $data;
      	}
      	public function add_new_chat($user1,$user2)
      	{
      		$arr = array($user1,$user2);
      		$this->db->where_in('user1',$arr); 
        	$this->db->where_in('user2',$arr); 
  			$query = $this->db->get('tbl_chat'); 
	        $result = $query->num_rows();
	        if($result)
	        {
	        	return false;
	        }
	        else
	        {
	        	$records = array(
	        				'user1' => $user1,
	        				'user2' => $user2,
	        			);
	        	// return $records;
	        	$flag = $this->db->insert('tbl_chat',$records);  
        	   $insert_id = $this->db->insert_id();
        	   // echo $insert_id;
        	   // die;

	        	$records1 = array(
		        				'chat_id' => $insert_id,
		        				'sender_id' => $user1,
		        				'reciver_id' => $user2,
		        				'message' => "Started Chat with"
		        			);
	        	$flag2 = $this->db->insert('tbl_conversations',$records1);  
	        	return $flag;

	        }
      	}
      	public function getmsginfo($id)
      	{
      		$multiData = array('id' => $id);
  			$this->db->limit(1);
  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
      	}
      	
        public function list_chats($arr)
        {
        	// return $arr;
        	$this->db->where('user1',$arr); 
        	$this->db->or_where('user2',$arr); 
  			$query = $this->db->get('tbl_chat'); 

	        $data = $query->result();

	        // return $query;
	        // return $data;
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	        		$this->db->select('id');
	        		$this->db->where('status','unread');
	        		$this->db->where('chat_id',$d->id);
	        		$this->db->where('reciver_id',$arr);

					$query =$this->db->get('tbl_conversations');
	        		$count =  $query->num_rows();
	        		$chatname = $this->get_chat_name($d->id);
	        		$chatstatus = $this->get_user_status($this->user_model->getid($chatname));
			        $d->chatname =  $chatname;
			        $d->chatstatus =  $chatstatus[0]['status'];
			        $d->unreaded = $count; 
			        $d->reciver_name =  $this->user_model->getName($d->user2);
			        $d->sender_name =  $this->user_model->getName($d->user1);
	        	}
	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
        }

        public function get_user_status($id)
        {
        	
        	$this->db->select('status');
	        		$this->db->where('id',$id);
					$query = $this->db->get('tbl_user');
					$result = $query->result_array();
					return $result;
        }


        public function searchMsg($text,$chatid)
        {

        	$multiData = array(
        						'chat_id' => $chatid
        					);
            $chatname = $this->get_chat_name($multiData['chat_id']);
  			$this->db->order_by("timestamp", "desc");
  			$this->db->limit(7);
  			$this->db->like('message',$text,'after');
  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	        	$data['chatname'] = $chatname;
	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
        }

         public function list_messages($chatid)
        {
        	$multiData = array('chat_id' => $chatid);
            $chatname = $this->get_chat_name($multiData['chat_id']);
  			$this->db->order_by("timestamp", "desc");
  			$this->db->limit(7);

  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	        	$data['chatname'] = $chatname;
	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
        }
         public function list_all_messages($chatid)
        {
        	$multiData = array('chat_id' => $chatid);
            $chatname = $this->get_chat_name($multiData['chat_id']);
  			$this->db->order_by("timestamp", "desc");

  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	        	$data['chatname'] = $chatname;
	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
        }

        public function get_chat_name($id)
        {
        	$uid = $this->session->userdata('userid');
        	$this->db->select('user1'); 
        	$this->db->select('user2'); 
        	$this->db->where('id',$id); 
  			$query = $this->db->get('tbl_chat'); 
	        $data = $query->result();
	        if($uid != $data[0]->user1 )
	        {
	        	$final = $data[0]->user1;
	        }
	        if($uid != $data[0]->user2 )
	        {
	        	$final = $data[0]->user2;
	        }
	        $name = $this->user_model->getName($final);
	       	return $name;
	       
	        
        }

        public function send_msg($msg,$reciver,$replied,$file_path=null,$file_type=null,$file_ext=null,$file_size=0)
        {

        	$senderid = $this->session->userdata('userid');
        	$reciverid = $this->user_model->getid($reciver);
        	$chatid =  $this->session->userdata('chatID');
        	if($senderid && $reciverid)
        	{
        		$records = array(
		        				'chat_id' => $chatid,
		        				'sender_id' => $senderid,
		        				'reciver_id' => $reciverid,
		        				'replied' => $replied,
		        				'file_type' => $file_type,
		        				'file_path' => $file_path,
		        				'file_ext' => $file_ext,
		        				'file_size' => $file_size,
		        				'message' => $msg
		        			);
	        	$flag = $this->db->insert('tbl_conversations',$records);  
        		return $flag;
        	}
        	else
        	{
        		return false;
        	}
        }

        public function set_readed($id)
        {
        	$data = array(
        			'status' => "read",
        				);
        	$this->db->where('id', $id);
        	$flag =$this->db->update('tbl_conversations',$data);
        	return $flag;

        }

        public function search_frd($msg)
        {
			// $this->user_model->getid()
        	$arr = $this->session->userdata('userid');
			$this->db->where('user1',$arr); 
        	$this->db->or_where('user2',$arr); 
  			$query = $this->db->get('tbl_chat'); 

	        $data = $query->result();
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                
	                // $this->user_model->getName($d->user2);
	                $d->chatname = $this->get_chat_name($d->id); 
	        		// $d->user1_name = $this->user_model->getName($d->user1);
	        		// $d->user2_name = $this->user_model->getName($d->user2);

	        		$uid = $this->user_model->getid($this->get_chat_name($d->id));
	        		$this->db->select('id');
	        		$this->db->where('id',$uid); 
        			$this->db->like('name',$msg,'after');
        			$query = $this->db->get('tbl_user');
        			// $result = $query->result_array();
        			$d->search = $query->num_rows();
        			if($query->num_rows()>0)
        			{
	        			return $d;
        			}
	        		// return $result;

	        	}

	        }




	    }


   //      public function list_old_msg($start,$offset,$chatid)
   //      {
   //      	$multiData = array('chat_id' => $chatid);
   //          $chatname = $this->get_chat_name($multiData['chat_id']);
  	// 		$this->db->order_by("timestamp", "desc");
   //          $this->db->limit($start,$offset);
  	// 		$query = $this->db->get_where('tbl_conversations',$multiData); 
	  //       $data = $query->result();
	  //       // return $data;
	  //       if($data)
	  //       {
	  //       	foreach ($data as $d)
	  //       	{
	  //               $reciver = (array)$d;
	  //               $param = array('id' => $reciver['reciver_id']);
	  //               $this->db->select('name');
	  // 				$this->db->where($param);
	  // 				$q = $this->db->get('tbl_user'); 
			//         $name = $q->result();
			//         $d->reciver_name = $name[0]->name;
			//         $param = array('id' => $reciver['sender_id']);
	  //               $this->db->select('name');
	  // 				$this->db->where($param);
	  // 				$q = $this->db->get('tbl_user'); 
			//         $name = $q->result();
			//         $d->sender_name = $name[0]->name;

	  //       	}

	  //       	$data['chatname'] = $chatname;
	  //           $final = (array)$data;

	  //       	return $final;
	  //       }
			// else
			// {
   //              return false;
			// }


   //      }
        public function list_old_msg($limit,$start)
        {
        	$multiData = array('chat_id' => $this->session->userdata("chatID"));
            $chatname = $this->get_chat_name($multiData['chat_id']);
  			$this->db->order_by("timestamp", "desc");
            $this->db->limit($limit,$start);
  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        // return $data;
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	        	$data['chatname'] = $chatname;

      			$status = $this->chat_model->get_user_status($this->user_model->getid($chatname));
	        	$data['chatstatus'] = $status[0]['status'];

	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}


        }



        public function addToFav($id)
        {
        	$chatid =  $this->session->userdata('chatID');
        	$uid =  $this->session->userdata('userid');


        	$records = array(
	        				'user_id' => $uid,
	        				'chat_id' => $chatid,
	        				'conversation_id' => $id,
	        			);
        	$query = $this->db->get_where('favourite_mesages',$records); 
        	if($query->num_rows() <= 0)//insert the favourite items to the db
        	{
		        $flag = $this->db->insert('favourite_mesages',$records);  
	        	$insert_id = $this->db->insert_id();
	        	return $flag;
        	}
        	else//Delete the favourite items to the db
        	{
        		return false;
        	}
        }


        public function list_Fav()
        {

        	$uid =  $this->session->userdata('userid');
        	$param = array('user_id' => $uid);
        	$this->db->where($param);
        	$query = $this->db->get('favourite_mesages');
        	$data = $query->result();
        	foreach ($data as $d) 
        	{
	            $param = array('id' => $d->conversation_id);
        		$query = $this->db->get_where('tbl_conversations',$param);
        		$result = $query->result();
        		foreach ($result as $r) 
        		{
	        		$d->sender_name = $this->user_model->getName($r->sender_id);
	        		$d->reciver_name = $this->user_model->getName($r->reciver_id);
	        		$d->msg = $r->message;
	        	}
	        }
        	return $data;

       	 }

        public function list_new_msg($chatid)
        {
        	$multiData = array('chat_id' => $chatid);
            $chatname = $this->get_chat_name($multiData['chat_id']);
  			$this->db->order_by("timestamp", "desc");
            $this->db->limit(1);
  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        // return $data;
	        if($data)
	        {
	        	foreach ($data as $d)
	        	{
	                $reciver = (array)$d;
	                $param = array('id' => $reciver['reciver_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->reciver_name = $name[0]->name;
			        $param = array('id' => $reciver['sender_id']);
	                $this->db->select('name');
	  				$this->db->where($param);
	  				$q = $this->db->get('tbl_user'); 
			        $name = $q->result();
			        $d->sender_name = $name[0]->name;

	        	}

	        	$data['chatname'] = $chatname;

	        	$status = $this->chat_model->get_user_status($this->user_model->getid($chatname));
	        	$data['chatstatus'] = $status[0]['status'];
	        	
	            $final = (array)$data;

	        	return $final;
	        }
			else
			{
                return false;
			}
        }

        public function delete_message($id,$msg)
        {
        	$data = array(
        		 		'message' => $msg,
        		 		'replied' => null
        		 		);
        	$this->db->where('id', $id);
        	$flag =$this->db->update('tbl_conversations',$data);
        	return $flag;
        }

        public function edit_message($id,$msg)
        {
        	$data = array(
        					'message' => $msg,
        					'edited' => true
        				);
        	$this->db->where('id', $id);
        	$flag =$this->db->update('tbl_conversations',$data);
        	return $flag;
        }

        public function get_message($id)
        {

        	$multiData = array('id' => $id);
  			$this->db->select('message'); 
  			$query = $this->db->get_where('tbl_conversations',$multiData); 
	        $data = $query->result();
	        return $data;
        }

        public function pinchat($id)
        {
        	$uid = $this->session->userdata('userid');


        	$records = array(
	        				'user_id' => $uid,
	        				'chat_id' => $id,
	        			);
        	$query = $this->db->get_where('pined_chats',$records);
        	if($query->num_rows() < 1)
        	{
	        	$flag = $this->db->insert('pined_chats',$records);  
        	   	$insert_id = $this->db->insert_id();
        		return $flag;	
        	} 
        	else
        	{
	        	return false;
        	}





     //    	$this->db->select_max('pined');
     //    	$this->db->where('user1',$uid); 
     //    	$this->db->or_where('user2',$uid); 
  			// $query = $this->db->get('tbl_chat'); 
  			// $result = $query->result();
  			// // return $result;

     //    	$data = array(
     //    			'pined' => intval($result[0]->pined) + 1,
     //    				);
     //    	$this->db->where('id', $id);
     //    	$flag =$this->db->update('tbl_chat',$data);
        }
        public function unpinchat($id)
        {
        	$uid = $this->session->userdata('userid');

        	$this->db->where('user_id', $uid);
        	$this->db->where('chat_id', $id);
			$result = $this->db->delete('pined_chats');
        	return $result;	
        }

        public function getpined()			
        {
        	$uid = $this->session->userdata('userid');
	       	$this->db->where('user_id', $uid);
        	// $this->db->order_by("id", "desc");
        	$query = $this->db->get('pined_chats');
        	$data = $query->result();
        	foreach ($data as $d)
        	{
		        $result = $this->get_chat_name($d->chat_id);
		        $d->chatname = $result;

        	}
			return $data;


        }

}
?>