<?
$link=mysql_connect('127.0.0.1') or die(mysql_error());
mysql_create_db('Cars') or die(mysql_error());
$sql="CREATE TABLE cars (

id int(10) DEFAULT '0' NOT NULL auto_increment,
name varchar(30),
speed varchar(10),
color varchar(10),
price varchar(10),
PRIMARY KEY (id)
)";
mysql_db_query("Cars",$sql);
echo " The table is CREATED !";
?>