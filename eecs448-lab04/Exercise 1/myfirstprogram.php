<?php

function toTable(){
  echo"<table width : \"100%\">";
  echo"<th> </th>";
  for($x = 1; $x <= 100; $x++){
    echo"<th>$x</th>";
  }

  for($x = 1; $x <= 100; $x++){
    echo"<tr>";
    echo"<th>$x</th>";

    for($y = 1; $y <= 100; $y++){
      $z = $x*$y;
      echo "<th>$z</th>";
    }
    echo"</tr>";
    echo"</tr>";
  }
}
toTable();

?>
