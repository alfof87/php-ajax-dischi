<?php
  include "vars.php";
  // echo $data["response"]["title"];
  // echo count($data["response"]);

  $dataResponse = $data["response"];
  // echo $dataResponse;
  // echo count($dataResponse);

  foreach ($dataResponse as $arr) {
     ?><p><?php echo $arr["poster"];?></p> <?php;
     ?><h4><?php echo $arr["title"];?></h4> <?php;
     ?><h5><?php echo $arr["author"];?></h5> <?php;
     ?><h5><?php echo $arr["genre"];?></h5> <?php;
     ?><h6><?php echo $arr["year"];?></h6> <?php;
     echo "<br><br>";
  }

 ?>
