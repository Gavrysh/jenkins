<?php

class Main extends CI_Controller {
    
    function index()
    {
        $data['title'] = 'Work';
        $data['heading'] = 'Heading';
        
        $this->load->view('work/main', $data);
    }
}