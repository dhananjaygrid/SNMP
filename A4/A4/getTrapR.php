<?php
$db = new SQLite3('test.db');
$count = $db->query('SELECT count(*) FROM manager');
while($heavy = $count->fetchArray()){
#echo $heavy['count(*)'];

if ($heavy['count(*)'] == 0){
echo "FALSE";
}
else{
$results = $db->query('SELECT * FROM manager ORDER BY id DESC LIMIT 1');

while ($row = $results->fetchArray()) {
echo  $row[2]. "@" .$row[1]. ":" .$row[3];
}   
}
}
?>



