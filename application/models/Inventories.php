<?php

/**
 * @author Daniel Zhang
 */
class Inventories extends MY_Model {
    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // retrieve a single inventory by passing id
    public function get($which)
    {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
                if ($record['id'] == $which)
                        return $record;
        return null;
    }

    // retrieve all of the inventories
    public function all()
    {
        return $this->data;
    }        
    
    // retrieve one single inventory by passing name
    public function getInventory($which){
            $source = array();
            $name = $this->getName($which);
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['name'] == $name){
                    $source[] = $record;
                }
            }
            return $source;
	}
    
    // retrieve one inventory name 
    public function getName($which){
        // iterate over the data until we find the one we want
        $href = preg_replace("/[-]/", " ", $which);
        foreach ($this->data as $record){
            if ($record['name'] == $href){
                return $record['name'];
            }
        }
        return null;
    }
}