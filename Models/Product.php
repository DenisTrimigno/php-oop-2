<?php 

    class Product {
        public $name;
        public $image;
        public $price;
        public $category;

        public function __construct(String $_name, String $_image, Float $price, String $_category){
            $this->name = $_name;
            $this->image = $_image;
            $this->price = $_price;
            $this->category = $_category;
        }

        public function getDiscountedPrice(int $_discount = 0) {  //percentuale di sconto
            if ($_discount == 0) {
                $_discounted_price = $this->price;

                return $discounted_price *= (1 - $_discount / 100);

            }
        }
    }

?>