<?php

// Staffというクラス(型)を宣言。クラスの1文字目は大文字
class Staff {

  // property
  public $name;
  public $age;

}

//クラスStaffのインスタンスを作成
$tanaka = new Staff;

//インスタンス名->プロパティ名  ※プロパティの"$"はつけない
//tanakaというインスタンスのプロパティ$nameに、tanakaを挿入。
$tanaka->name = "tanaka";

echo $tanaka->name; // tanaka