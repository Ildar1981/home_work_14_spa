<?php
session_start();
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Киномонстр Bootstrap</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main style of the page -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="user-login">
    <?php
    if (isset($_SESSION['authorized'])) {
      echo '<div class="login">
  <a class="login_text" href="#">' . getCurrentUser() . '</a>
  <a class="log_out" href="logout.php">Выйти</a>
  </div>';
    } else {
      echo '<div class="login">
  <a class="sign_in" href="login.php">Войти</a>
</div>';
    }
    ?>
  </div>
  <div class="container-fluid">
    <div class="row">

      <nav role="navigation" class="navbar navbar-inverse">
        <div class="container">

          <div class="navbar-header header">

            <div class="container">
              <div class="row">

                <div class="col-lg-12">
                  <h1><a href="#">Spa-salon</a></h1>
                  <p>Красота - наша страсть!</p>
                </div>





              </div>
              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>

            </div>

            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">

              <ul class="nav nav-pills">
                <li class="active"> <a href="#">Главная</a> </li>
                <li> <a href="#">О нас</a> </li>
                <li> <a href="#">Наши услуги</a> </li>
                <li> <a href="#">Подпишись на нас</a> </li>
                <li> <a href="#">Контакты</a> </li>
              </ul>


            </div>
          </div>


      </nav>

    </div>
  </div>

  <div class="wrapper">

    <div class="container">

      <div class="row">

        <div class="col-lg-9 col-lg-push-3">

          <h2>О нас</h2>
          <hr>
          <div class="row">

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa2.jpg" alt="Ароматерапия">
              <div class="film-label">Ароматерапия</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa3.jpg" alt="Отдых для тела">
              <div class="film-label">Отдых для тела</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa4.jpg" alt="Релакс зона">
              <div class="film-label">Релакс зона</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa5.jpg" alt="Банный комплекс">
              <div class="film-label">Банный комплекс</div>
            </div>


          </div>

          <div class="margin-8"></div> <!-- Разделитель между блоками -->

          <h2>Наши услуги</h2>
          <hr>
          <div class="row">

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa6.jpg" alt="СПА-процедуры для лица">
              <div class="film-label">СПА-процедуры для лица</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa7.jpg" alt="СПА-процедуры для рук">
              <div class="film-label">СПА-процедуры для рук</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa8.jpg" alt="СПА-процедуры для ног">
              <div class="film-label">СПА-процедуры для ног</div>
            </div>

            <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
              <img src="assets/img/spa9.jpg" alt="СПА-процедуры для тела">
              <div class="film-label">СПА-процедуры для тела</div>
            </div>


          </div>

          <div class="margin-8"></div> <!-- Разделитель между блоками -->


          <a href="#">
            <h3>СПА-процедуры для лица</h3>
          </a>
          <hr>
          <p>
            Избавиться от следов усталости и недосыпания, убрать первые морщинки, сделать кожу более упругой – со всеми
            этими целями «справляются» методы СПА для лица. В салонах вам предложат скрабы и пилинги, витаминные и
            глиняные маски, массаж и аппаратные процедуры. Для закрепления результата стоит обратить внимание на
            лосьоны, кремы и косметику на основе морских минералов.
          </p>

          <a href="#" class="btn btn-warning pull-right">Читать</a>

          <div class="margin-8"></div> <!-- Разделитель между блоками -->

          <a href="#">
            <h3>Спа процедуры для всего тела</h3>
          </a>
          <hr>
          <p>
            Избавиться от следов усталости и недосыпания, убрать первые морщинки, сделать кожу более упругой – со всеми
            этими целями «справляются» методы СПА для лица. В салонах вам предложат скрабы и пилинги, витаминные и
            глиняные маски, массаж и аппаратные процедуры. Для закрепления результата стоит обратить внимание на
            лосьоны, кремы и косметику на основе морских минералов.
          </p>

          <a href="#" class="btn btn-warning pull-right">Читать</a>

          <div class="margin-8 clear"></div> <!-- Разделитель между блоками -->



        </div>

        <div class="col-lg-3 col-lg-pull-9">
          <?php
          if (isset($_SESSION['authorized']) && getCurrentUser() !== null) {
            echo '<h2>Здравствуйте,' . ' ' . getCurrentUser() . '!</h2>';
            if ($_SESSION['checkBirthDay'] > 0) {
              echo '
                <div">
                <p>До дня рождения осталось:' . ' ' . $_SESSION['checkBirthDay'] . ' ' . 'дней (-ень)</p>
                </div>';
            } else if ($_SESSION['checkBirthDay'] === 0) {
              echo '
                <div>
                <p> Поздравляем Вас с Днем Рождения! В честь этого мы подготовили для вас специальную акцию!</p>
                </div>';
            }
          }
          ;
          ?>
        </div>

      </div>


    </div>
  </div>

  <div class="clear"></div>

  </div>

  <footer>
    <div class="container">
      <p class="text-center"></p>
    </div>

  </footer>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>