<?php
 class Category extends CI_Controller{


public function index(){
      $data['title']='List Of Categories';
      $data['category']=$this->category_model->get_categories();

	 $this->load->view('templates/header');
       $this->load->view('categories/index',$data);
       $this->load->view('templates/footer');

 	}



 	public function create(){
    if(!$this->session->userdata('logged_in'))
    {
      redirect('user/login');
    }
       $data['title']='Add A New Category';

       $this->form_validation->set_rules('category','Category','required');
       if ($this->form_validation->run()===FALSE) {

       	$this->load->view('templates/header');
       $this->load->view('categories/create',$data);
       $this->load->view('templates/footer');

       }else{

        $this->session->set_flashdata('category_created','The category has been created');
          $this->category_model->create_category();
          redirect('category/index');

       }



 	}
 	 /*public function posts($id){
       $data['title']='Posts';
       $data['detail']=$this->category_model->get_posts($id);

       $this->load->view('templates/header');
       $this->load->view('categories/posts');
       $this->load->view('templates/footer');

 	 }*/
   public function posts($id){
     $data['title'] =$this->category_model->get_category($id)->name;
     $data['posts']=$this->Posts_model->get_posts_by_category($id);

     $this->load->view('templates/header');
       $this->load->view('posts/index',$data);
       $this->load->view('templates/footer');

   }


 }
