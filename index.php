<?php
  include 'vars.php';
  // echo $data["response"]["title"];

  foreach ($data as $arr) {
    echo $arr["poster"] . "<br>";
    echo $arr["title"] . "<br>";
    echo $arr["author"] . "<br>";
    echo $arr["genre"] . "<br>";
    echo $arr["year"] . "<br>";
  }

 ?>
