<html><head>
<title>Adding to database</title></head>
<body bgcolor=#eeeeee><font face=arial>
<?php
if (!@($name)): $f=1;endif;
if (!@($speed)): $f=1;endif;
if (!@($color)): $f=1;endif;
if (!@($price)): $f=1;endif;
if(($submit) & (!@($f))){
$db=mysql_connect("localhost");
mysql_select_db("Cars",$db);
echo "$count\n";
$sql="INSERT INTO cars (id,name,speed,color,price) VALUES
('$ID','$name','$speed','$color','$price')";
$result=mysql_query($sql);
echo "<font size=4 face=arial color=#330066>\n";
while (list($name,$value)=each($HTTP_POST_VARS)){
echo "$name = $value<br><br>\n";
}
echo "<font size=5 face=arial color=red>";
echo "<center>Thank you! Information has been added to database.</font>\n";
echo "<br><br><Br>\n";
echo "<form method=\"post\" action=\"$PHP_SELF\">\n";
echo "<input type=\"submit\" value=\"Go Back To Main\">\n";
echo "</form>\n";
}
else{
$count=1;
$db=mysql_connect("localhost");
mysql_select_db("Cars",$db);
$temp=mysql_query("SELECT * FROM cars");
while($myrow=mysql_fetch_array($temp)){
$count=$count+1;//test how many records have been in database.
}
echo "<Br><Br>\n";
echo "<table boarder=0><tr><td align=right>\n";
echo "<font size=4 face=arial color=#330066>\n";
echo "<form method=post action=\"$PHP_SELF\">\n";
echo " <font color=red>Your ID will be $count\n</font><br>";
echo "<input type=\"hidden\" value=$count name=\"ID\"><br>\n";
echo "Name: <input type=\"text\" name=\"name\"><Br><Br>\n";
echo "Speed: <input type=\"text\" name=\"speed\"><Br><Br>\n";
echo "Color: <input type=\"text\" name=\"color\"><Br><br>\n";
echo "Price: <input type=\"text\" name=\"price\"><Br><br>\n";
echo "<input type=\"submit\" name=\"submit\" value=\"add to database\">\n";
echo "</form>\n";
echo "</td></tr></table>\n";?>
<H3 align=center>
<a href="main1.php" target="m1"> Back to Main </a>
</H3>
<?
}
?>
</body>
</html>