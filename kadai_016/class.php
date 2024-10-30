<?php
class Food {
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(){
        echo "Price: " . $this->price . "円<br>";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height() {
        echo "Height: " . $this->height . " cm<br>";
    }
}

// Foodクラスのインスタンスを作成し、メソッドを実行
$apple = new Food("Apple", 150);
echo "Food Name: " . $apple->name . "<br>";
$apple->show_price(); // show_priceメソッドを実行

// Animalクラスのインスタンスを作成し、メソッドを実行
$elephant = new Animal("Elephant", 300, 5000);
echo "Animal Name: " . $elephant->name . "<br>";
$elephant->show_height(); // show_heightメソッドを実行
?>
