<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎15章課題</title>
</head>

<body>
  <p>

<?php
class Food{
  private $name;
  private $price;

  public function __construct(string $name,int $price){
    $this->name = $name;
    $this->price = $price;
  }

   public function show_price() {
    echo "名前: " . $this->name . "\n";
    echo "値段: " . $this->price . "円\n";
   }
}

$food = new Food('potato', 250);
$food->show();

?>

</p>
</body>

</html>
