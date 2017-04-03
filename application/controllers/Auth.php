<?php

class Auth extends CI_Controller {

    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");
    }

    public function login(){
        $this->form_validation->set_rules('username','Username', 'required');
        $this->form_validation->set_rules('password','Password', 'required|min_length[5]');

        if($this->form_validation->run() == TRUE) {

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('username' => $username, 'password' => $password));
            $query = $this->db->get();

            $user = $query->row();
            if (isset($user)) {
                //$this->session->set_flashdata("success", "Logged in");
                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->username;
                $_SESSION['firstname'] = $user->firstname;
                $_SESSION['lastname'] = $user->lastname;

                redirect("user/profile","refresh"); //call user controller's profile() function
            } else {
                $this->session->set_flashdata("error", "Invalid login");
                redirect("auth/login","refresh");
            }
        }
        $this->load->view('templates/header');
        $this->load->view('login_view');
        $this->load->view('templates/footer');
    }

    /*
     * function to validate registration form and store into database
     */
    public function register(){
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username','Username', 'required|is_unique[users.username]');
                $this->form_validation->set_message('is_unique', '%s is taken.'); //override message if username is not unique
            $this->form_validation->set_rules('password','Password', 'required|min_length[5]');
            $this->form_validation->set_rules('confirmpass','Confirm Password', 'required|min_length[5]|matches[password]');
            $this->form_validation->set_rules('firstname','FirstName', 'required');
            $this->form_validation->set_rules('lastname','LastName', 'required');

            if($this->form_validation->run() == TRUE){ //if form validation is true
                echo 'form validated';

                $data = array(
                    'username'=>$_POST['username'],
                    'password'=>md5($_POST['password']),
                    'firstname'=>$_POST['firstname'],
                    'lastname'=>$_POST['lastname']
                );
                //add user to database
                $this->db->insert('users',$data);

                //$this->session->set_flashdata("success","Registered!"); //sets message + $_SESSION['success'] is set
                redirect("auth/login","refresh");
            }
        }
        $this->load->view("templates/header");
        $this->load->view("register_view");
        $this->load->view("templates/footer");
    }
}