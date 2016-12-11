<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application{
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->data['pagebody'] = 'menu';
        $result = $this->menu->all();
        $this->data['content'] = $result;
        $this->render();
    }
}
