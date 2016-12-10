<?php

/**
 *
 * @author lizewu
 */
class Recipes extends MY_Model2 {

	// Constructor
	public function __construct(){
            
            parent::__construct("Recipes","menu_id","inventory_id");
	}

//	// retrieve a single menu
//	public function get($which)
//	{
//            // iterate over the data until we find the one we want
//            foreach ($this->data as $record){
//                    if ($record['id'] == $which){
//                            return $record;
//                    }
//            }
//            return null;
//	}
//
//	// retrieve all of the menus
//	public function all()
//	{
//            return $this->data;
//	}
//       
//  	public function getRecipe($which){
//            $recipy = array();
//            $name = $this->getName($which);
//            // iterate over the data until we find the one we want
//            foreach ($this->data as $record){
//                if ($record['menu'] == $name){
//                    $recipy[] = $record;
//                }
//            }
//            return $recipy;
//	}
//        
//        public function getName($which){
//           
//            // iterate over the data until we find the one we want
//            foreach ($this->data as $record){
//                if ($record['id'] == $which){
//                    return $record['menu'];
//                }
//            }
//            return null;
//	}
//        
        public function names(){
           $name = array();
           $names = array();
           $result = $this->all();
           $i = 0;
          
            // iterate over the data until we find the one we want
            foreach ($result as $record){ 
                if (!in_array($record->menu_id, $name)){
                    $names[] = array('id' => $i++, 'name' => $record->menu_id);
                    $name[] = $record->menu_id;
                }
            }
            
            return $names;
	}
  
}





