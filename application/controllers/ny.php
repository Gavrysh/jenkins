<?php

class NY extends CI_Controller {
    
    function index()
    {
        $data['title'] = 'New York';
        $data['heading'] = 'Heading';
        
        $this->load->view('index', $data);
    }
    
    function comments()
    {
        echo 'See, this!';
    }
}
