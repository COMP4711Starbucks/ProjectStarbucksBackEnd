<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author lizewu
 */
class Welcome extends Application{
    //put your code here
    function __construct()
    {
            parent::__construct();
            $this->load->model('recipes');
            $this->data['pagetitle'] = 'Starbuck';
    }
    
    public function index()
    {
        $role = $this->session->userdata('userrole');
        if($role == "guest"){
            redirect('/unauthorize');
        }
        
        $this->load->helper('formfields');
        $this->data['title'] = 'Starbuck(server)';
        //$this->load->model('recipes');
        $this->data['pagebody'] = 'recipy_list';
        $this->data['names'] = $this->recipes->names();
        $this->render(); 
    }
}
