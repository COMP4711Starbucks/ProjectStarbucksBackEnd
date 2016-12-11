<?php /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inventory
 *
 * @author Daniel Zhang
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
        $this->data['pagebody'] = 'inventory_recipe';
        $this->data['inventoryName']= $this->inventories->getName($id);
        $this->data['menu'] = $this->inventories->getMenu($id);
        $this->render(); 
    }
}