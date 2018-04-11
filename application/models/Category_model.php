<?php 
/**
* 
*/
class Category_model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

    public function create_category(){
    	$data=  array('name' => $this->input->post('category'));
      $insert= $this->db->insert('categories',$data);
      return $insert;
	}
	 public function get_categories(){
        $this->db->order_by('name');
        $query=$this->db->get('categories');
        return $query->result_array();
    }

     public function get_category($id){
      $result= $this->db->get_where('categories',(array('id' => $id )));
        return $result->row();
        
    }

    
}
