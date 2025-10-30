
<?php
    class Food {
        public $name; 
        public $price; 

        public function show_price() {
        echo $this -> price;
        }

        public function __construct($name, $price){
            $this -> name = $name;
            $this -> price =$price;
        }
    }

    class Animal{
        public $name;
        public $height;
        public $weight;

        public function show_height(){
            echo $this -> height;
        } 

        public function __construct($name, $height, $weight){
            $this -> name = $name;
            $this -> height= $height;
            $this -> weight =$weight;
        }
    }

    $onion = new Food('玉ねぎ', 30);
    print_r($onion);
    echo '<br>';
    $bird = new Animal('フクロウ', 100, 60);
    print_r($bird);
    echo '<br>';
    $onion -> show_price();
    echo '<br>';
    $bird -> show_height();
?>