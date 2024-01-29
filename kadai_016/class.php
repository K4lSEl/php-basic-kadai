<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;
      
      public function show_price() {
        echo $this->price;
      }

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price; 
      }
    }

    class Animal {
      private $name;
      private $height;
      private $Weight;

      public function show_height() {
        echo $this->height;
      }

      public function __construct(string $name, int $height, int $Weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $Weight;
      }
    }

    $food = new Food('potato', 250);
    print_r($food);

    echo '<br>';

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);

    echo '<br>';

    $food->show_price(250);

    echo '<br>';

    $animal->show_height(60);
    ?>
</body>

</html>