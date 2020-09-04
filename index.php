<?php
  include 'vars.php';
  // echo $data["response"]["title"];
  // echo count($data["response"]);

  $dataResponse = $data["response"];
  echo $dataResponse;
  echo count($dataResponse);

  foreach ($dataResponse as $arr) {
    echo $arr["poster"] . "<br>";
    echo $arr["title"] . "<br>";
    echo $arr["author"] . "<br>";
    echo $arr["genre"] . "<br>";
    echo $arr["year"] . "<br>";
    echo "<br><br>";
  }

 ?>
