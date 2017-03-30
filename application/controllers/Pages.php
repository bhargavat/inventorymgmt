<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){ //will call home by default
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404(); #codeigniter function to load 404 error (file not found)
            }

            $data['title'] = ucfirst($page); #uppercase first letter of page

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data); //page name + pass in data from $data array
            $this->load->view('templates/footer');
        }
    }

/*
 ex: http://localhost/inventorymgmt/pages/view/about
 loads view method with $page = about
 i.e. opens the about.php file
*/