<html><head>
<title></title></head>
<body bgcolor=#eeeeee link=#330066 vlink=#330066>
<?php
// Подключение к базе данных
$mysqli =  mysqli_connect("localhost", "root", "", "Php") or die(mysql_error());

// Проверка соединения
if ($mysqli_connect->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


if($modify)
{
$sql="UPDATE cars SET name='$name',speed='$speed',color='$color' ,price='$price'
WHERE id=$id";
$result=mysql_query($sql);
echo "<font size=4 face=arial color=#330066>\n";
echo "Here is the updated information<br><br>\n";
while (list($name,$value)=each($HTTP_POST_VARS)){
echo "$name = $value<br><br>\n";
}
echo "<font size=5 face=arial color=red>";
echo "<center>Information has been updated.</font>\n";
echo "<br><br>\n";
echo "<form method=\"post\" action=\"$PHP_SELF\">\n";
echo "<input type=\"submit\" value=\"Go Back To Main\">\n";
echo "</form>\n";
}
else if($delete)
{
$sql="DELETE FROM cars WHERE id=$id";
$result=mysql_query($sql);
echo "<font size=4 face=arial color=#330066>\n";
echo "The following record has been deleted:<br><br>\n";
while (list($name,$value)=each($HTTP_POST_VARS)){
echo "$name = $value<br><br>\n";
}
echo "<font size=5 face=arial color=red>";
echo "<center>Information has been deleted.</font>\n";

echo "<br><br>\n";
echo "<form method=\"post\" action=\"$PHP_SELF\">\n";
echo "<input type=\"submit\" value=\"Go Back To Main\">\n";
echo "</form>\n";
}
else
if($id)
{
$result=mysql_query("SELECT * FROM cars WHERE id=$id");
$myrow=mysql_fetch_array($result);
?>
<table boarder=0 width=250><tr><td align=right>
<font size=4 face=arial color=#330066>
<form method=post action="<?php echo $PHP_SELF ?>" >
ID: <input type="text" value="<?php echo $myrow["id"] ?>" name="id"><br>
Name: <input type="text" value="<?php echo $myrow["name"] ?>"
name="name"><Br><Br>
Speed: <input type="text" value="<?php echo $myrow["speed"] ?>"
name="speed"><Br><Br>
Color: <input type="text" value="<?php echo $myrow["color"] ?>"
name="color"><Br><br>
Price: <input type="text" value="<?php echo $myrow["price"] ?>"
name="price"><Br><br>
<input type="submit" name="modify" value="Modify It">
<input type="submit" name="delete" value="Delete It">
</form>
</td></tr></table>
<H3 align=center>

<a href="main1.php" target="m1"> Back to Main </a>
</H3>
<?php
}
else{
echo"<center><h3> To delete or change a value, select the desired one
record</center><br><hr size=2>";
echo "<font face=arial>\n";
// Подключение к базе данных
$mysqli =  mysqli_connect("localhost", "root", "", "Php") or die(mysql_error());

// Проверка соединения
if ($mysqli_connect->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
;
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
$HP_SELF,$myrow["id"],$myrow["id"],$PHP_SELF,$myrow["id"],$myrow["name"],$myrow["speed"],$myrow["color"],$myrow["price"]);
}while($myrow=mysqli_fetch_array($result));
}
?>
</body></html>