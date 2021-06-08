<?php
class user_model extends CI_Model {

      	public function getid($name)
      	{
            $this->db->select('id');
            $this->db->where('name',$name); 
            $query = $this->db->get('tbl_user'); 
  	        $data = $query->result();
  	        return $data[0]->id;      	
	      }

        public function getName($id)
        {
            $this->db->select('name');
            $this->db->where('id',$id); 
            $query = $this->db->get('tbl_user'); 
            $data = $query->result();
            return $data[0]->name;        
        }

        public function login_Check($arr)
        {
            $query = $this->db->get_where('tbl_user',$arr); 
            $data = $query->result();
	        if($query->num_rows() > 0)
	        {
                $this->session->set_userdata('userid', $data[0]->id);
                $this->session->set_userdata('name', $data[0]->name);
	        	return $data[0];
	        }
			else
			{
                return false;
			}
        }
        public function select_users()
        {
        	$user_name = $this->session->userdata('name');
        	$this->db->select("name");
        	$this->db->where_not_in('name',$user_name);
  			$query = $this->db->get('tbl_user'); 
	        $data = $query->result();
	        // print_r($data);
	        return $data;
	        // die;
        }

        public function set_status($value)
        {
            $id = $this->session->userdata('userid');

            $data = array(
                    'status' => $value,
                        );
            $this->db->where('id', $id);
            $flag =$this->db->update('tbl_user',$data);
            return $flag;
        }

        public function reg_check($n,$e,$p)         
        {
            $records = array(
                            'name' => $n,
                            'email' => $e,
                            'password' => $p,
                        );
                // return $records;
                $flag = $this->db->insert('tbl_user',$records);  
               // $insert_id = $this->db->insert_id();
                return $flag;
        }
}
?>