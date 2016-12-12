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
class Maintenance extends Rest_Controller{
    function __construct()
    {
            parent::__construct();
            $this->load->model('recipes');
            $this->data['pagetitle'] = 'Starbuck';
    }
    //put your code here
    // Handle an incoming GET - cRud
    function index_get()
    {
        
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        
        
        if (!$key)
        {
            $this->response($this->recipes->all(), 200);
        } else
        {
            $result = $this->recipes->get($key,$key1);
            if ($result != null)
                $this->response($result, 200);
            else
                $this->response(array('error' => 'Menu item not found!'), 404);
        }
    }
    
    function item_get()
    {
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        
        $result = $this->recipes->get($key,$key1);
        if ($result != null)
            $this->response($result, 200);
        else
            $this->response(array('error' => 'Menu item not found!'), 404);        
    }

    // Handle an incoming PUT - crUd
    function index_put()
    {
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        $record = array_merge(array('menu_id' => $key, 'inventory_id'=>$key1), $this->_put_args);
        $this->recipes->update($record);
        $this->response(array('ok'), 200);
    }

    function item_put()
    {
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        $record = array_merge(array('menu_id' => $key, 'inventory_id'=>$key1), $this->_put_args);
        $this->recipes->update($record);
        $this->response(array('ok'), 404);
    }
    
    // Handle an incoming POST - Crud
    function index_post()
    {
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        $record = array_merge(array('menu_id' => $key, 'inventory_id'=>$key1), $_POST);
        $this->recipes->add($record);
        $this->response(array('ok'), 200);
    }
    
    // Handle an incoming POST - add a new menu item
    function item_post()
    {
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        $record = array_merge(array('menu_id' => $key, 'inventory_id'=>$key1), $_POST);
        $this->recipes->add($record);
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
        $a = $this->get('id');
        $pieces = explode("-", $a);
        $key = $pieces[0];
        if($a!=null){
            $key1 = $pieces[1]; 
        }
        $this->recipes->delete($key,$key1);
        $this->response(array('ok'), 200);
    }
}
