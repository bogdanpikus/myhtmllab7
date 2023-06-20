<html><head>
<title></title></head>
<body bgcolor=#eeeeee link=#330066 vlink=#330066>


<?php
// Подключение к базе данных
$mysqli =  mysqli_connect("localhost", "root", "", "Php") or die(mysql_error());;

// Проверка соединения
if ($mysqli_connect->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}




$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("DROP TABLE IF EXISTS MyGuests");

$sql = "CREATE TABLE CARS (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
speed VARCHAR(30) NOT NULL,
color VARCHAR(50),
price VARCHAR(30) NOT NULL
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table CARS created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$sql = "INSERT INTO CARS (id, name, speed,color,price) VALUES ('1','Nessan','red','1300000'),('2','BMV','210','Black','300000'),('3','Porsche','300','Blue','3000000')";



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

