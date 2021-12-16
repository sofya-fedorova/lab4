<?php require_once __DIR__ . "/header.php";
require_once __DIR__ . "/modal.php";
session_start();
if (!empty($_POST['but_exit'])) {     
  session_unset();
}?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!doctype html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css\stayl.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <title>Добавление</title>
  </head>
<body>
  <header id = "header" class = "header">
		<div class = "container">
        <?php header_site();?>
		</div>
	</header>

  <section>
    	<div class = "container">
            <form class = "container" action="add.php" method="post" name="add" enctype="multipart/form-data">
        <div class="description">
        <div class="photoDescription">
          <img  type="file" src="img/addFoto.png" alt="Rectangle5" class="adve">

            <div class="upload_form">
                <label>
                    <input name="file" type="file" class="main_input_file" accept="image/*"/>
                    <div>Обзор...</div>
                    <input class="f_name" type="text" id="f_name" value="Добавить фото." disabled />
                </label>
            </div>

        </div>
        <div class="Information">
          <div class="InformationBut">
            <div style="margin-top: 35px;">
              <p>Добавить заголовок:</p>
              <input name="guruweba_example_text addHeading" type="text" class="addZag" />
            </div>
            <div>
              <p>Добавить цену:</p>
              <input name="guruweba_example_text addPrise" type="text" class="addZag" />
            </div>
            <div>
              <p>Добавить описание:</p>
              <textarea class="addOpes" name="addOpes"></textarea>
            </div>
                  <div class="publish">
        <button type="submit" name="button" class="button Add">
          <span>Опубликовать</span>
        </button>
      </div>
        </div>
      </div>
      </div>

            </form>

      </div>

  </section>
  <footer>
    <div class="footer">
      <div class = "container">
        <div class="block">
        <div>
          <h6>Разработчики:</h6>
          <h6>почта почта почта почта почта</h6>
          <h6>почта почта почта почта почта</h6>
        </div>
        <div>
          <h6>Объявления.ru — сайт объявлений</h6>
        </div>
        </div>
      </div>
    </div>
  </footer>
<?php modal_windows() ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/main.js"></script>
  <script>

      $(document).ready(function() {

          $(".main_input_file").change(function() {

              var f_name = [];

              for(var i = 0; i < $(this).get(0).files.length; ++i) {

                  f_name.push($(this).get(0).files[i].name);

              }

              $("#f_name").val(f_name.join(", "));
          });

      });

  </script>
</body>
</html>
