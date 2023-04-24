<?php
$mysqli = new mysqli('localhost', 'root','', 'hoteli');
if($mysqli->connect_errno != 0){
   echo $mysqli->connect_error;
   exit();
}
$json_data = file_get_contents("Rooms.json");
$rooms = json_decode($json_data, JSON_OBJECT_AS_ARRAY);
$rooms = json_decode($json_data, true);
$stmt = $mysqli->prepare("
   INSERT INTO rooms(roomname) VALUES(?)
");
$stmt->bind_param("ssid",$name);
$inserted_rows = 0;
foreach ($Rooms as $Room) {
   $Roomid = $Room["Roomid"];
   
 
   $stmt->execute();
   $inserted_rows ++;
}
if(count($products) == $inserted_rows){
   // All products are successfully recorded in the database.
}else{
   // There was an error.
}
