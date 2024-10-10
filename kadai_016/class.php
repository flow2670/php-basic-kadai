<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food
        {
            public $name;
            public $price;
            // メソッドを定義
            public function show_price()
            {
                // $this->price = $price;
            }
            // コンストラクタを定義
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }
        class Animal
        {
            public $name;
            public $height;
            public $weight;
            // メソッドを定義
            public function show_height()
            {
                // $this->height = $height;
            }
            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        // インスタンス化する
        $kadai_016 = new Food('カレー',360);
        $kadai_016_2 = new Animal('猫',50,100);


        // メソッドにアクセスして実行する
        $kadai_016->show_price(360);
        $kadai_016_2->show_height(50);


        //インスタンスの各プロパティの値を出力する
        print_r($kadai_016);
        echo '<br>';
        print_r($kadai_016_2);

        ?>
    </p>
</body>

</html>