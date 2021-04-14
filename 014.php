<?php
class Fruits {
 
  // プロパティ
  private $name = "";
 
  // プロパティ$nameに値をセットするメソッド（セッター）
  public function setName($name) {
    $this->name = $name;
  }
 
  // プロパティ$nameの値を取得するメソッド（ゲッター）
  public function getName() {
    return $this->name;
  }
 
  // ローカル変数$nameの値を取得するメソッド（ゲッター）
  public function getNameLocal() {
    // ローカル変数$nameを定義
    $name = "orange";
    return $name;
  }
}

// インスタンス化
$fruits = new Fruits();

// Fruitsのプロパティ$nameに"apple"をセット
$fruits->setName("apple");

// Fruitsのプロパティ$nameの値を出力
echo $fruits->getName()."\n";

// getNameLocalメソッドで定義したローカル変数$nameの値を出力
echo $fruits->getNameLocal();
?>