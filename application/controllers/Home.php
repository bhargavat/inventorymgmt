<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['email'] = $session_data['email'];
            print $data['email'];
            $data['first_name'] = $session_data['first_name'];
            $data['last_name'] = $session_data['last_name'];
            $this->load->view('homeView', $data);
        }
        else
        {
            echo "<script>console.log('error!');</script>";
            //If no session, redirect to login page
            redirect('auth/login', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}

?>