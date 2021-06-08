<?php
class Admin_model extends CI_Model {

		public function index()
		{

		}
      	public function list_users()
      	{
      		$this->db->select('id, name, email, status, view_chat_role, reply_chat_role, modify_chat_role');
            $this->db->order_by('id','asc');
            $query = $this->db->get('tbl_user'); 

  	        $data = $query->result();
  	        return $data;      	
		}

		public function login_Check($arr)
        {
  			$query = $this->db->get_where('admin',$arr); 
	        $data['records'] = $query->result();
	        if($query->num_rows() > 0)
	        {
                $final = (array)$data['records'][0];
                $this->session->set_userdata('admin_id', $final['id']);
                $this->session->set_userdata('admin_name', $final['name']);
	        	return true;
	        }
			else
			{
                return false;

			}
        }
		public function edit_roles($uid,$role,$bool)
		{
				$data = array(
        			$role => $bool=="true" ? 1 : 0,
        				);
        	$this->db->where('id', $uid);
        	$flag =$this->db->update('tbl_user',$data);
        	return $flag;
		}

		public function set_status($value)
        {
            $id = $this->session->userdata('userid');

            $data = array(
                    'status' => $value,
                        );
            $this->db->where('id', $id);
            $flag =$this->db->update('admin',$data);
            return $flag;
        }

        public function del_user($uid)
        {
        	$where = array(
        			'id' => $uid, 
        				);
        	$result = $this->db->delete('tbl_user',$where);
        	return $result;
        }
        
}
?>