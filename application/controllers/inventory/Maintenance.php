<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maintenance
 *
 * @author lizewu
 */
require APPPATH . '/third_party/restful/libraries/Rest_controller.php';
class Maintenance extends Rest_Controller {
    function __construct()
    {
            parent::__construct();
            $this->load->model('inventories');
            $this->data['pagetitle'] = 'Starbuck';
    }
    //put your code here
    // Handle an incoming GET - cRud
    function index_get()
    {
        $key = $this->get('id');
        if (!$key)
        {
            $this->response($this->inventories->all(), 200);
        } else
        {
                $result = $this->inventories->get($key);
                if ($result != null)
                    $this->response($result, 200);
                else
                    $this->response(array('error' => 'Menu item not found!'), 404);  
          
            
        }
    }
    
    function check_get(){
        $key = $this->get('id');
        $result = $this->inventories->all();
        $t;
        $get = 0;
        foreach($result as $r){
            if($r->name == $key){
                $get = 1;
                $t = $r;
            }
        }
        if ($get == 1)
            $this->response($t, 200);
        else
            $this->response(array('error' => 'ok'), 404);  
    }
    
    function item_get()
    {
        $key = $this->get('id');
        $result = $this->inventories->get($key);
        if ($result != null)
            $this->response($result, 200);
        else
            $this->response(array('error' => 'Menu item not found!'), 404);        
    }
    
    // Handle an incoming PUT - crUd
    function item_put()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $this->_put_args);
        $this->inventories->update($record);
        $this->response(array('ok'), 200);
    }

    function index_put()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $this->_put_args);
        $this->inventories->update($record);
        $this->response(array('ok'), 200);
    }
    
    // Handle an incoming POST - Crud
    function index_post()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->inventories->add($record);
        $this->response(array('ok'), 200);
    }
    
    // Handle an incoming POST - add a new menu item
    function item_post()
    {
        $key = $this->get('id');
        $record = array_merge(array('id' => $key), $_POST);
        $this->inventories->add($record);
        $this->response(array('ok'), 200);
    }
    // Handle an incoming DELETE - cruD
    function index_delete()
    {
        $this->response('ok', 200);
    }
    // Handle an incoming DELETE - delete a menu item
    function item_delete()
    {
        $key = $this->get('id');
        $this->inventories->delete($key);
        $this->response(array('ok'), 200);
    }
}
