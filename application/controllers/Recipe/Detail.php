<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recipy
 *
 * @author lizewu
 */
class Detail extends Application{
    //put your code here
    function __construct()
    {
            parent::__construct();
            $this->load->helper('formfields');
    }
        
    
    public function detail($id)
    {
        //$this->load->model('recipes');
            
        $this->data['pagebody'] = 'recipy_detail';
        $this->data['detail']= $this->recipes->getRecipe($id);
        $this->data['name'] = $this->recipes->getName($id);
        $this->data['id'] = $id;
        $this->render(); 
    }
    
    function edit($id = null) {
        $key = $this->session->userdata('key');    
        $record = $this->session->userdata('record');   
    // try the session first
        $pieces = explode("-", $id);
        $menu = $pieces[0];
        $item = $pieces[1];
        $counter = 0;
        foreach($this->recipes->getEdit($menu) as $i){
            if($item == $i->inventory_id){
                $this->data['fquantity'] = makeTextField('', 'quantity', $i->quantity);
                $counter = 1;
            }
        }
        if($counter == 0){
            echo "404";
            return;
        }
        $cats = $this->recipes->getNames();
        $already = $this->recipes->getItems($item);
        foreach($cats as $code){ 
            if($item == $code || !(in_array($code, $already))){
              $codes[$code] = $code;  
            }
            
        }
        $this->data['name'] = $menu;
        $this->data['zsubmit'] = makeSubmitButton('Save', 'Submit changes');
        $this->data['fname'] = makeCombobox('', 'item', $this->recipes->getName($menu),$codes);
        $this->data['pagebody'] = 'recipy_detail_edit';
        $this->render();
    }
    function cancel() {
        $this->session->unset_userdata('key');
        $this->session->unset_userdata('record');
        $this->index();
    }
    
    function add($id = null){
        
        
        
    }
    
}
