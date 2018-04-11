<?php 
  class User_model extends CI_Model{
  	public function register_member(){
  		$password=md5($this->input->post('password'));
   $data=array(
      'name'=> $this->input->post('name'),
      'username'=>$this->input->post('username'),
       'email'=>$this->input->post('email'),
      'password'=>$password,
      'zipcode'=>$this->input->post('zipcode'));
   $query=$this->db->insert('user',$data);

     return $query;
  	}
    public function check_username_exists($username){
        $query=$this->db->get_where('user',array('username'=>$username,));
        if (empty($query->row_array())) {
              return true;
            }else{
                return false;
                  }

    }
    public function check_email_exists($email){
        $query=$this->db->get_where('user',array('email'=>$email,));
        if (empty($query->row_array())) {
              return true;
            }else{
                return false;
                  }

    }

    public function loggedin($username,$password){
         
         
         $this->db->where('username',$username);
         $this->db->where('password',$password);
         $query=$this->db->get('user');

         if ($query->num_rows()==1) {
           return $query->row(0)->id;
         }else{
          return false;
         }

    }
  }