<?php

/**
 *
 * @author lizewu
 */
class Recipes extends CI_Model {

	// Constructor
	public function __construct(){
            
            parent::__construct();
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
//        public function names(){
//           $name = array();
//            // iterate over the data until we find the one we want
//            foreach ($this->data as $record){
//                if (!in_array($record['menu'], $name)){
//                    $names[] = array('id' => $record['id'], 'name' => $record['menu']);
//                    $name[] = $record['menu'];
//                }
//            }
//            return $names;
//	}
  
}





