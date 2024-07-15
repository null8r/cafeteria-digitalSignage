<?php
  //dbと接続
  $db = 'mysql:host=mysql;dbname=today-menu;charset=utf8mb4';
  $user = 'root';
  $passwd = 'password';

  $PDO = new PDO($db, $user, $passwd);

  $table = 'today-menu';
  
  $j=0;
  
  for($i=0; $i<5; $i++){
    //前画面のformから受け取る
    $menu = $_POST['menu'.$i];
    if(is_numeric($menu)){
      $sql = "UPDATE `" . $table . "` SET `status`='" . $menu . "' WHERE `" . $table . "`.`id`=" . $i+1;
      $stmt = $PDO->query($sql);
      $j=1;
    }
  }
  if($j==1){
    echo "更新しました。";
  }
  else{
    echo "編集内容が無かったため、更新を行いませんでした。";
  }
  
  echo "<br>前のページに戻るかこのページを閉じてください。";
?>