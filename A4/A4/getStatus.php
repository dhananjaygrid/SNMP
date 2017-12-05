<?php
$db = new SQLite3('test.db');


$count = $db->query('SELECT count(*) FROM devices');
while($heavy = $count->fetchArray(SQLITE3_ASSOC)){
#echo $heavy['count(*)'];

if ($heavy['count(*)'] == 0){
echo "FALSE";
}
else{
$results = $db->query('SELECT * FROM devices ');

while ($row = $results->fetchArray()) {
echo   $row[1]. "|" .$row[2]. "|" .$row[3]. "|" .$row[4]. "|" .$row[5]. "\n";


}

    
}
}
?>

