<?php

class Main extends CI_Controller {
    
    function index()
    {
        $data['title'] = 'Contacts';
        $data['heading'] = 'Heading';
        
        $this->load->view('contacts/main', $data);
    }
}