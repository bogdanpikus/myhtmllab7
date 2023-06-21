<html><head>
<title></title></head>
<body bgcolor=#eeeeee link=#330066 vlink=#330066>



<?php
// Подключение к базе данных
$mysqli =  mysqli_connect("localhost", "root", "", "lab10") or die(mysql_error());;

// Проверка соединения
if ($mysqli_connect->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql = "CREATE TABLE cars (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
speed VARCHAR(30) NOT NULL,
color VARCHAR(50),
price VARCHAR(30) NOT NULL
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table  cars  created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$sql = "INSERT INTO cars (name, speed, color, price)
VALUES ('TAYOTA', '200 km/h', 'RED', '300000'), 
('LADA', '140 km/h', 'Blue', '70000'),
('SEDAN', '120 km/h', 'GRAY', '444000'),
('BMW ', '290 km/h', 'PINK', '1125000')";


$sql="select * from “LAB10”";






if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo " The table is CREATED !";

$result=$mysqli->query("SELECT * FROM cars",$db);
echo "<table border=0 bordercolorlight=white bordercolordark=black
align=center>\n";
echo "<tr align=center bgcolor=blue><td><font color=white>ID</td><td><font
color=white>Name</td><td><font color=white>Speed</td><td><font
color=white>Color</td><td><font color=white>Price</td></tr>\n";
do{
printf("<tr align=center bgcolor=lightblue><td><a
href=\"%s?id=%s\">%s</td><td><a
href=\"%s?id=%s\">%s</td><td>%s</td><td>%s</td><td>%s</td></tr></a>\n",$PHP_SELF,
$HP_SELF,$myrow["id"],$myrow["id"],$PHP_SELF,$myrow["name"],$myrow["speed"],$myrow["color"],$myrow["price"]);
}while($myrow=mysqli_fetch_array($result));





?>

</body></html>
