<?php

class Main extends CI_Controller {
    
    function index()
    {
        $data['title'] = 'Blog';
        $data['heading'] = 'Heading';
        
        $this->load->view('blog/main', $data);
    }
}