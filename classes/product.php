<?php 
    class Product {
        public $product_name;
        public $description;
        public $price;
        public $available;
        public $image;

        public function __construct($product_name,$description = "Descrizione non disponibile per il prodotto",$price,$available = 1,$image = "https://commercial.bunn.com/img/image-not-available.png") {
            $this -> product_name = $product_name;
            $this -> description = $description;
            $this -> price = $price;
            $this -> available = $available;
            $this -> image = $image;
            
        }
    }
    
    class NewArrivals extends Product {
        
        public function setAvailability($available_from) {
            
            return "In vendita dal : 31/07/2021";
        }
    }
    
?>


