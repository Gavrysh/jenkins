<?php

class Main extends CI_Controller {
    
    function index()
    {
        $data['title'] = 'About';
        $data['heading'] = 'Heading';
        
        $this->load->view('about/main', $data);
    }
}