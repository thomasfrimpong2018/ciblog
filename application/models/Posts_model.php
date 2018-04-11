<?php
class Posts_model extends  CI_Model{

    public function __construct()
    {
        $this->load->database();

    }
    public function get_posts($slug = FALSE){
        if ($slug === FALSE){
            $this->db->order_by('posts.id','DESC');
            $this->db->join('categories','categories.id = posts.category_id');
            $query=$this->db->get('posts');
            return $query->result_array();

        }else{
            $query=$this->db->get_where('posts',array('slug'=>$slug));
           /* $this->db->order_by('posts.id','DESC');
            $this->db->join('categories','categories.id = posts.category_id');*/
            return $query->row_array();
        }

    }
    public function create_post($post_image){
        $slug=url_title($this->input->post('title'),'underscore');
        $data=array(
            'title'=>$this->input->post('title'),
            'body'=>$this->input->post('body'),
            'slug'=>$slug,
            'category_id'=>$this->input->post('category_id'),
            'post_image'=>$post_image,
            'user_id'=>$this->session->userdata('user_id')
        );
       $insert= $this->db->insert('posts',$data);
       return $insert;

    }
    public function delete_post($id){
        $this->db->where('id',$id);
        $this->db->delete('posts');
       return true;
    }
    public function update_post(){
        $slug=url_title($this->input->post('title'),'underscore');
        $data=array(
            'title'=>$id=$this->input->post('title'),
            'body'=>$id=$this->input->post('body'),
            'slug'=>$slug,
            'category_id'=>$this->input->post('category_id')
        );
        $id=$this->input->post('id');
        $this->db->where('id',$id);
        return $this->db->update('posts',$data);

    }
    public function get_categories(){
        $this->db->order_by('name');
        $query=$this->db->get('categories');
        return $query->result_array();
    }

    public function get_posts_by_category($category_id){

          $this->db->order_by('posts.id','DESC');
          $this->db->join('categories','categories.id=posts.category_id');
          $query=$this->db->get_where('posts', array('category_id'=>$category_id));
          return $query->result_array();

    }
}
