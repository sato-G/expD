<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="result.css">
  </head>
  <body>
    <div class="top">
      ここになんか
      <br>

    </div>

    <div class="result" id="js-result">
      <div class="result-nav">
        <a href="" class="result-nav-item is-active" data-nav="0">１人目</a>
        <a href="" class="result-nav-item" data-nav="1">２人目</a>
        <a href="" class="result-nav-item" data-nav="2">共通の話題</a>
      </div>
      <div class="result-contents">
        <div class="result-contents-item" data-content="0">
          <?php
            if (isset($_POST['first']) === TRUE) {
              $first = $_POST['first'];
              foreach ($first as $fi){
                echo $fi;
                echo "<br>";
              }
            }
          ?>
          タブその0
        </div>
        <div class="result-contents-item" data-content="1">
          <?php
              if (isset($_POST['second']) === TRUE) {
                $second = $_POST['second'];
                foreach ($second as $se){
                  echo $se;
                  echo "<br>";

                }
              }
            ?>
            
          タブその1
        </div>
        <div class="result-contents-item" data-content="2">

          <?php
            $result = array_intersect($first, $second);
            foreach($result as $re){
              echo $re;
              echo "<br>";
            }
          ?>
          タブその2
        </div>
      </div>
    </div>

    <script type="text/javascript" src="result.js"></script>

  </body>
</html>