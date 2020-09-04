<?php
  include "vars.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">


  </head>
  <body id="bkg">
    <?php
    $dataResponse = $data["response"];
    // echo $dataResponse;
    // echo count($dataResponse);

    foreach ($dataResponse as $arr) {
      ?><div id="container">
        <img src="<?php echo $arr["poster"];?>" alt="">

        <?php echo "<br>";
        ?><h4><?php echo $arr["title"];?></h4> <?php;
        echo "<br>";
        ?><h5><?php echo $arr["author"];?></h5> <?php;
        echo "<br>";
        ?><h5><?php echo $arr["genre"];?></h5> <?php;
        echo "<br>";
        ?><h6><?php echo $arr["year"];?></h6> <?php;
        echo "<br><br>";
      ?></div><?php;

    }

   ?>
  </body>
</html>
