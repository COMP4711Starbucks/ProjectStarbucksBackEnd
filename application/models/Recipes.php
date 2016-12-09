<?php

/**
 *
 * @author lizewu
 */
class Recipes extends CI_Model {

	var $data = array(
            array('id' => '1', 'menu' => 'Caramel Macchiato', 'item' => 'Milk', 'Quantity' => '2'),
            array('id' => '2', 'menu' => 'Caramel Macchiato', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '3', 'menu' => 'Cappuccino', 'item' => 'Milk', 'Quantity' => '3'),
            array('id' => '4', 'menu' => 'Cappuccino', 'item' => 'Brewed Espresso','Quantity' => '1'),
            array('id' => '5', 'menu' => 'Caramel Macchiato', 'item' => 'Vanilla Syrup', 'Quantity' => '1'),
            array('id' => '6', 'menu' => 'Caramel Macchiato', 'item' => 'Caramel Sauce', 'Quantity' => '1'),
            array('id' => '7', 'menu' => 'Latte', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '8', 'menu' => 'Latte', 'item' => 'Brewed Espresso', 'Quantity' => '2'),
            array('id' => '9', 'menu' => 'Mocha', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '10', 'menu' => 'Mocha', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '11', 'menu' => 'Mocha', 'item' => 'Mocha Sauce', 'Quantity' => '1'),
            array('id' => '12', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '13', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '14', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '15', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '16', 'menu' => 'Pumpkin Spice Latte', 'item' => 'Pumpkin Spice Topping', 'Quantity' => '1'),
            array('id' => '17', 'menu' => 'White Chocolate Mocha', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '18', 'menu' => 'White Chocolate Mocha', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '19', 'menu' => 'White Chocolate Mocha', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '20', 'menu' => 'White Chocolate Mocha', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            
            // added more recipe by Tianyang Liu; 'item' is not proper
            array('id' => '21', 'menu' => 'Blueberry Bar', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '22', 'menu' => 'Blueberry Bar', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '23', 'menu' => 'Blueberry Bar', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '24', 'menu' => 'Chocolate Cake Pop', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '25', 'menu' => 'Chocolate Cake Pop', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '26', 'menu' => 'Chocolate Cake Pop', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '27', 'menu' => 'Chocolate Cake Pop', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '28', 'menu' => 'Blueberry Yogurt & Honey Muffin', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '29', 'menu' => 'Blueberry Yogurt & Honey Muffin', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '30', 'menu' => 'Blueberry Yogurt & Honey Muffin', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '31', 'menu' => 'Chocolate Mocha', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '32', 'menu' => 'Chocolate Mocha', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '33', 'menu' => 'Chocolate Mocha', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '34', 'menu' => 'Chocolate Mocha', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '35', 'menu' => 'Lemon Loaf', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '36', 'menu' => 'Lemon Loaf', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '37', 'menu' => 'Lemon Loaf', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '38', 'menu' => 'Lemon Loaf', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '39', 'menu' => 'Chocolate Chunk Muffin', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '40', 'menu' => 'Chocolate Chunk Muffin', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '41', 'menu' => 'Chocolate Chunk Muffin', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '42', 'menu' => 'Plain Bagel', 'item' => 'Pumpkin Spice Sauce', 'Quantity' => '1'),
            array('id' => '43', 'menu' => 'Plain Bagel', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '44', 'menu' => 'Plain Bagel', 'item' => 'Whipped Cream', 'Quantity' => '1'),
            array('id' => '45', 'menu' => 'Egg & Cheddar Breakfast Sandwich', 'item' => 'Milk', 'Quantity' => '1'),
            array('id' => '46', 'menu' => 'Egg & Cheddar Breakfast Sandwich', 'item' => 'White Chocolate Mocha Sauce', 'Quantity' => '1'),
            array('id' => '47', 'menu' => 'Egg & Cheddar Breakfast Sandwich', 'item' => 'Brewed Espresso', 'Quantity' => '1'),
            array('id' => '48', 'menu' => 'Egg & Cheddar Breakfast Sandwich', 'item' => 'Whipped Cream', 'Quantity' => '1')
            
	);

	// Constructor
	public function __construct(){
            
            parent::__construct();
	}

	// retrieve a single menu
	public function get($which)
	{
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                    if ($record['id'] == $which){
                            return $record;
                    }
            }
            return null;
	}

	// retrieve all of the menus
	public function all()
	{
            return $this->data;
	}
       
  	public function getRecipe($which){
            $recipy = array();
            $name = $this->getName($which);
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['menu'] == $name){
                    $recipy[] = $record;
                }
            }
            return $recipy;
	}
        
        public function getName($which){
           
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if ($record['id'] == $which){
                    return $record['menu'];
                }
            }
            return null;
	}
        
        public function names(){
           $name = array();
            // iterate over the data until we find the one we want
            foreach ($this->data as $record){
                if (!in_array($record['menu'], $name)){
                    $names[] = array('id' => $record['id'], 'name' => $record['menu']);
                    $name[] = $record['menu'];
                }
            }
            return $names;
	}
  
}





