<?php

// Staffというクラス(型)を宣言。クラスの1文字目は大文字
class Staff {

  // property
  public $name;
  public $age;

  // constructor
  public function __construct($name) {
    $this->name = $name;
  }

  // method
  public function Hello() {
    echo "hi, i am $this->name!";
  }

}

//クラスStaffのインスタンスを作成。(引数で$nameを入れてあげます。)
$tanaka = new Staff("tanaka");

echo $tanaka->name; // tanaka
$tanaka->Hello(); // hi, i am tanaka!