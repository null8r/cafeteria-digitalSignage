<?php
  //dbと接続
  $db = 'mysql:host=mysql;dbname=today-menu;charset=utf8mb4';
  $user = 'root';
  $passwd = 'password';

  $PDO = new PDO($db, $user, $passwd);

  //前画面のformから受け取る
  $table = 'today-menu';

  for($i=1; $i<=5; $i++){
    $menu = $_POST['menu'.$i];
    $sql = "UPDATE `" . $table . "` SET `status`='" . $menu . "' WHERE `" . $table . "`.`id`=" . $i;
    $stmt = $PDO->query($sql);
  }
  echo "更新しました。\n前のページに戻るかこのページを閉じてください。";
?>