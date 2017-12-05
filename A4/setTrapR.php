<?php

$db = new SQLite3('test.db');   
 if (empty($_GET)) {
    echo "FALSE";
}
else { $x = htmlspecialchars($_GET["ip"]);
$y = htmlspecialchars($_GET["port"]);
$z =  htmlspecialchars($_GET["community"]);
  
   $sql =<<<EOF
      INSERT INTO manager (ip,community,port)
      VALUES ('$x','$y','$z');

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "OK";
   }
   $db->close();
}
#echo htmlspecialchars($_GET["ip"]) . htmlspecialchars($_GET["port"]) . htmlspecialchars($_GET["community"]);
?>
