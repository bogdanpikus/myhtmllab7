<html>
<title>Search the database</title></head><body bgcolor=#eeeeee>
<font face=arial color=#330066 size=4>
<center>
<H3 align=center>
<a href="MAIN1.php" target="m1"> Back to Main </a>
</H3>
<form method=post action="<?php echo $PHP_SELF ?>">
<font size=3 face=arial color=#330066><b>Search by: &nbsp </b></font>
<SELECT NAME="value">
<option value="id">ID
<option value="name">Name
<option value="speed">Speed
<option value="color">Color
<option value="price">Price
</select>
<br><br>
<input type=text name="keyword" size=35>
<input type=submit value="Search">
</form><br><hr color=red height=8>
<?php
if($keyword){
$db=mysql_connect("localhost");
mysql_select_db("Cars",$db);
if($value==id){
$sql="SELECT * FROM cars WHERE id='$keyword'";
}
else if($value==name){

51

$sql="SELECT * FROM cars WHERE name='$keyword'";
}
else if($value==speed){
$sql="SELECT * FROM cars WHERE speed='$keyword'";
}
else if($value==color){
$sql="SELECT * FROM cars WHERE color='$keyword'";
}
else{
$sql="SELECT * FROM cars WHERE price='$keyword'";
}
$result=mysql_query($sql);
if($myrow=mysql_fetch_array($result))
{
echo "<Center><font size=4 color=red face=arial><b>Result:</font>\n";
echo "<table border=1 bordercolorlight=white bordercolordark=black>\n";
echo
"<tr><td>ID</td><td>Name</td><td>Speed</td><td>Color</td><td>Price</td></tr
>\n";
do{
printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n"
,$myrow["id"],$myrow["name"],$myrow["speed"],$myrow["color"],$myrow["price"
]);
}while($myrow=mysql_fetch_array($result));
}
else{
echo "<center><font color=red face=arial size=4>\n";
printf("Sorry, No records were found in our database!\n");

52

}
}
?>

</body>
</html>