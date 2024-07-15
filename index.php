<!--
  Hello, Developers!
-->

<!DOCTYPE html>
<html lang="ja">

<head prefix="og:https://ogp.me/ns#">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@600&display=swap" rel="stylesheet">
  <link href="./src/css/main.css" rel="stylesheet">

  <title>学食デジタルサイネージ / デザイン思考Q班</title>
</head>

<body>
  <div id="navbar">
    <nav class="navbar navbar-expand-sm navbar-light fixed-top glass-filter">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">🍽️ 学食デジタルサイネージ <span class="subTxt">/ デザイン思考Q班</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/null8r/cafeteria-digitalSignage">README</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <?php
  //dbと接続
  $db = 'mysql:host=mysql;dbname=today-menu;charset=utf8mb4';
  $user = 'root';
  $passwd = 'password';

  $PDO = new PDO($db, $user, $passwd);

  //sql、メニューの取得
  $menu_table = 'menu';

  $sql_menu = "SELECT * FROM " . $menu_table . ";";

  $res_menu = $PDO->query($sql_menu);
  $menu = $res_menu->fetchAll();

  //sql、今日のメニューを取得
  $today_table = 'today-menu';

  $sql_today = "SELECT * FROM `" . $today_table . "`;";

  $res_today = $PDO->query($sql_today);
  $today = $res_today->fetchAll();

  $i = 0;
  ?>

  <main id="top" class="glass-filter">
    <div class="signage">
      <?php 
        for($i=0; $i<5; $i++){
          echo '
            <div class="menu">
              <img src="./src/img/menu/' . $menu[$today[$i]["status"]]["photo"] . '">
              <span class="menuName">' .
                $menu[$today[$i]["status"]]["name"] . '
                <br>
              </span>
              <span class="menuPrice">' .
                $menu[$today[$i]["status"]]["price"] . '円
              </span>
            </div>
          ';
        }
      ?>
    </div>
  </main>

  <footer class="glass-filter">
    <p>
      Developed by <a href="https://github.com/null8r" title="GitHub" target="_blank" rel="noopener noreferrer">🦋</a>.
    </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@twemoji/api@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
  <script src="./src/js/main.js"></script>
</body>

</html>