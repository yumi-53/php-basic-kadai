<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基クラスを2つ作ってそれぞれのインスタンスを出力しよう礎編</title>
</head>

<body>
  <p>
    <?php
      class Food {
        private $name;
        private $price;
        
        // コンストラクタ定義
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        // メソッド定義
        public function show_price() {
          echo $this->price .'<br>';
        }
      }

      class Animal {
        private $name;
        private $height;
        private $weight;

        // コンストラクタ定義
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight  = $weight;
        }

        // メソッド定義
        public function show_height() {
          echo $this->height .'<br>';
        }
      }

      // インスタンス化と出力
      $food = new Food('potato', 250);
      print_r($food);
      echo '<br>';

      $animal = new Animal('dog', 60, 5000);
      print_r($animal);
      echo '<br>';
      
      // メソッドアクセス
      $food->show_price();
      $animal->show_height();
    ?>
  </p>

  </body>

</html>