<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<!--======== 前略 ========-->

<body>
    <p>
      <?php
        // クラスを定義する
        class Food {
          // プロパティを定義する                        
          private $name;
          private $price;

          // コンストラクタを定義する
          public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;            
          }

            // getterメソッドを追加
          public function show_price() {
            return $this->price;
          }
      }

      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $width;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $width) {
            $this->name = $name;
            $this->height = $height; 
            $this->width = $width;
        }

        // getterメソッドを追加
        public function show_height() {
            return $this->height;
        }
    }

        // インスタンス化する
        $food = new Food('potato',250);

        // インスタンス化する       
        $animal = new Animal('dog','60','5000');

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
        echo "<br>";

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
        echo "<br>";
        
        // 各プロパティの値を出力
        echo $food->show_price() . '<br>';
        echo $animal->show_height() . '<br>';
      ?>
    </p>   

    </body>


</html>