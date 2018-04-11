<?php
class Posts extends CI_Controller{

    public function index(){

        $data['title']= 'Latest Posts';
        $data['posts']=$this->Posts_model->get_posts();

        //print_r($data['posts']);

        $this->load->view('templates/header.php');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer.php');

    }
    public function view($slug=null){

      $data['post']=$this->Posts_model->get_posts($slug);
      $post_id=$data['post']['id'];
      $data['comments']=$this->Comments_model->get_comments($post_id);



        $this->load->view('templates/header.php');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer.php');
    }

    public function create(){
      if(!$this->session->userdata('logged_in'))
      {
        redirect('user/login');
      }
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('body','Body','required');
        $data['title']= 'Create Posts';
        $data['categories']=$this->Posts_model->get_categories();
        //$data['posts']=$this->Posts_model->get_posts();
        if ($this->form_validation->run()==FALSE){

            $this->load->view('templates/header.php');
            $this->load->view('posts/create',$data);
            $this->load->view('templates/footer.php');

        }else{
            //uploading images
            $config['upload_path']='./assets/images/posts/';
            $config['allowed_types']='png|gif|jpg';
            $config['max_size']='2048';
            $config['max_width']='2000';
            $config['max_height']='2000';

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('userfile')) {
                $errors = array('error' =>$this->upload->display_errors() );
                $post_image='noimage.png';

            }else{
                $data = array('upload_data' =>$this->upload->data() );
                $post_image=$_FILES['userfile']['name'];

            }
       $this->session->set_flashdata('post_create','Your post has been created');
            $this->Posts_model->create_post($post_image);
            redirect('posts');
        }

    }

    public function delete($id){
      if(!$this->session->userdata('logged_in'))
      {
        redirect('user/login');
      }
      $this->session->set_flashdata('post_deleted','Your posts has been deleted');
     $this->Posts_model->delete_post($id);
     redirect('posts');

    }
    public function edit($slug){
      if(!$this->session->userdata('logged_in'))
      {
        redirect('user/login');
      }
        $data['title']= 'Edit Posts';
        $data['posts']=$this->Posts_model->get_posts($slug);
        if($this->session->userdata('user_id')!=$this->Posts_model->get_posts($slug)['user_id'])
        {
          redirect('posts');
        }
        $data['categories']=$this->Posts_model->get_categories();

        $this->load->view('templates/header.php');
        $this->load->view('posts/edit',$data);
        $this->load->view('templates/footer.php');

    }
   public function update(){
     if(!$this->session->userdata('logged_in'))
     {
       redirect('user/login');
     }
        $this->session->set_flashdata('post_updated','Your posts has been updated');
        $this->Posts_model->update_post();
        redirect('posts');
   }
}
