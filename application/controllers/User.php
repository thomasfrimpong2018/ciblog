<?php
class User extends CI_Controller {

    public function register(){

       $data['title']='Sign Up';

      $this->form_validation->set_rules('name','Name','required');
       $this->form_validation->set_rules('zipcode','Zipcode','required');
       $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
       $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
       $this->form_validation->set_rules('password','Password','required');
       $this->form_validation->set_rules('password2','Password2','matches[password]');

       if ($this->form_validation->run()===FALSE) {
       	  $this->load->view('templates/header');
       	  $this->load->view('users/register',$data);
       	   $this->load->view('templates/footer');

       }else{
       	     $this->session->set_flashdata('user_registered','Your are now registered.You can log in');
              $this->User_model->register_member();
              redirect('posts');
       }

    }


    public function login()
    {

        $data['title'] = 'Sign In';


        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');

        } else {

            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));


            $user_id = $this->User_model->loggedin($username, $password);

            if ($user_id) {
                //create session data
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );
                //set session data
                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'Your are now logged in');
                redirect('posts');
            } else {

                $this->session->set_flashdata('login_failed', 'Login is invalid');

                redirect('user/login');
            }

        }
    }
    public function logout(){
       $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
         $this->session->unset_userdata('logged_in');

      $this->session->set_flashdata('logout_success','Your are now logged out');
      redirect('user/login');
    }




  public function check_username_exists($username){
          $this->form_validation->set_message('check_username_exists','This username is taken. Please choose another one.');
          if ($this->User_model->check_username_exists($username)) {
              return true;
            } else{
              return false;

            }



        }
       public function check_email_exists($email){
          $this->form_validation->set_message('check_email_exists','This email is taken. Please choose another one.');
          if ($this->User_model->check_email_exists($email)) {
              return true;
            } else{
              return false;

            }



        }

   }
