<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    
<?
echo "<br><H1 align=center>  LAB No8 </H1>";
echo "<br><hr size=2>";
?>
<h2 align=center>Demonstration of working with links </H2>
<?
for ($i=1;$i<=5;$i++)
{
printf("<li>The square of the number %s is equal to %s</li>",$i,$i*$i);
}
?>
<br>
<hr size=2>
<?
print("<h2 align=center>
Demonstration of working with lists</H2>");
if (@($undo)):
unset($do);
endif;
if (!@($do)):
?>
<form action="lab2.php">
<table>



<tr>
<td>Enter your name :
<td><input type=text name="name">
<tr>
<td>Enter your E-MAIL :
<td><input type=text name="email">
<tr>
<td>
<td align=center><input type=submit name="undo" value="Reset"><input
type=submit name="do" value="Send">
</table>
</form>
<?
else:
?>
<form action="lab2.php">
<table>
<tr>
<td>Enter your name :
<td><input type=text name="name">
<tr>
<td>Enter your name :
<td><input type=text name="email">
<tr>
<td>
<td align=center><input type=submit name="undo" value="Reset"><input
type=submit name="do" value="Send">
</table>



</form>
<hr size=2>
<? printf("Your name %s, E-mail:<a
href=\"mailto:%s\">%s</a>",$name,$email,$email); ?>
<hr size=2>
<? endif; ?>


</body>
</html>







