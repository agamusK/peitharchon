<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Name of Your Library</title>
<script src="js/menu.js" type="text/javascript"></script>
<link href="shelves.css" rel="stylesheet" type="text/css" />
<link REL="SHORTCUT ICON" HREF="<!-- Add your website icon here -->"> 

<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "calibri";
}
.options {
	font-family: "calibri";
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body>

<br />
<br />
<br />

<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="900" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="/akml/gfx/kmlheader.png" width="830" height="51" alt="AKML Welcome" /></h1>
      <p align="center"><a href="/akml/"><img border="0" src="/akml/gfx/home.png" onmouseover="this.src='/akml/gfx/home2.png';" onmouseout="this.src='/akml/gfx/home.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php"><img border="0" src="/akml/gfx/about.png" onmouseover="this.src='/akml/gfx/about2.png';" onmouseout="this.src='/akml/gfx/about.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/admin/index.php"><img border="0" src="/akml/gfx/admin.png" onmouseover="this.src='/akml/gfx/admin2.png';" onmouseout="this.src='/akml/gfx/admin.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<!-- Add your website address here -->"><img border="0" src="/akml/gfx/online.png" onmouseover="this.src='/akml/gfx/online2.png';" onmouseout="this.src='/akml/gfx/online.png';" /></a></p>
	  <p align="center">
   	  <table align="center" cellpadding="0" bgcolor="#FFFFFF" width="890" border="1">
		<tr>
		  <td>
			<div id="sse1">
			<div id="sses1">
				<ul>
					<li><a href="/akml/pages/critical.php">Secondary</a></li>
					<li><a href="/akml/pages/classics.php">Classics</a></li>
					<li><a href="/akml/pages/history.php">History</a></li>
					<li><a href="/akml/pages/literature.php">Literature</a></li>
					<li><a href="/akml/pages/nonfiction.php">Non-Fiction</a></li>
					<li><a href="/akml/pages/philosophy.php">Philosophy</a></li>
					<li><a href="/akml/pages/poetry.php">Poetry</a></li>
					<li><a href="/akml/pages/science.php">Science</a></li>
					<li><a href="/akml/pages/theater.php">Theater</a></li>
				</ul>
			</div>
			</div>
		  </td>
		</tr>
	  </table>        
      </p>
<table><p align="center">&nbsp;</p>
	<tr>
		<td><h3>&nbsp;&nbsp;&nbsp;Enter a book title or author:</h3>
		<p></p>
		<form method="post" action="search.php?go" id="searchform" >
		&nbsp;&nbsp;&nbsp;<input type="text" name="name" style="border:groove 4px" width=\"100%\">
		<input type="submit" name="submit" value="Search">
		</form>
		</td></tr><tr><td></td></tr>
		<tr><td><h3>&nbsp;&nbsp;&nbsp;Alpha-Sort by Letter:</h3>
		<p>&nbsp;&nbsp;&nbsp;<a  href="?by=A">A</a> | <a  href="?by=B">B</a> | <a  href="?by=C">C</a> | <a  href="?by=D">D</a> | <a  href="?by=E">E</a> | <a  href="?by=F">F</a> | <a  href="?by=G">G</a> | <a  href="?by=H">H</a> | <a  href="?by=I">I</a> | <a  href="?by=J">J</a> | <a  href="?by=K">K</a> | <a  href="?by=L">L</a> | <a  href="?by=M">M</a> | <a  href="?by=N">N</a> | <a  href="?by=O">O</a> | <a  href="?by=P">P</a> | <a  href="?by=Q">Q</a> | <a  href="?by=R">R</a> | <a  href="?by=S">S</a> | <a  href="?by=T">T</a> | <a  href="?by=U">U</a> | <a  href="?by=V">V</a> | <a  href="?by=W">W</a> | <a  href="?by=X">X</a> | <a  href="?by=Y">Y</a> | <a  href="?by=Z">Z</a></p>

<?php

include('req.php');
include('bank.php');
if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/^[a-zA-Z]+/", $_POST['name'])){ 
$name=$_POST['name'];
$sql="SELECT title1, authdisp, pages, libloc, ref FROM library WHERE title1 LIKE '%" . $name . "%' OR authdisp LIKE '%" . $name ."%'";
$result=mysql_query($sql);
$numrows=mysql_num_rows($result);
echo "<p>" .$numrows . " results found for books or authors containing your search word: " . stripslashes($name) . "</p>"; 
while($row=mysql_fetch_array($result)){

	$title1 =$row['title1'];
	$authdisp=$row['authdisp'];
	$pages=$row['pages'];
	$libloc=$row['libloc'];
	$ref=$row['ref'];
		
echo "<ul>\n"; 
echo "<li>" . "<a href='/akml/pages/book.php?result=$ref'>"  . $title1 . "   -  " . $authdisp . "   -  " . $pages . "   -  " . $libloc . "</a></li>\n";
echo "</ul>";
}
}else{
echo "<p>Please enter a search query</p>";
}
}
}
if(isset($_GET['by'])){
$letter=$_GET['by'];
$sql="SELECT title1, authdisp, pages, libloc, ref FROM library WHERE title1 LIKE '%" . $letter . "%' OR authdisp LIKE '%" . $letter ."%'";
$result=mysql_query($sql); 
$numrows=mysql_num_rows($result);
echo "<p>" .$numrows . " results found for books or authors beginning with the letter " . $letter . "</p>"; 
while($row=mysql_fetch_array($result)){

$title1 =$row['title1'];
	$authdisp=$row['authdisp'];
	$pages=$row['pages'];
	$libloc=$row['libloc'];
	$ref=$row['ref'];

	
echo "<ul>\n"; 
echo "<li>" . "<a href='/akml/pages/book.php?result=$ref'>"  .$title1 . "   -  " . $authdisp . "   -  " . $pages . "   -  " . $libloc . "</a></li>\n";
echo "</ul>";
}
}

if(isset($_GET['id'])){
$contactid=$_GET['id'];
$sql="SELECT * FROM library WHERE ID=" . $contactid;
$result=mysql_query($sql); 
while($row=mysql_fetch_array($result)){

    $title1 =$row['title1'];
	$authdisp=$row['authdisp'];
	$pages=$row['pages'];
	$libloc=$row['libloc'];
	$ref=$row['ref'];

echo "<ul>\n"; 
echo "<li>" . $FirstName . " " . $LastName . "</li>\n";
echo "<li>" . $pages . "</li>\n";
echo "<li>" . $libloc . "</li>\n";
echo "</ul>";
}
}
?>
</td>
</tr>
</table>
<!-- Wonder, for in this is your church. "In a climate that is very provocative, tea is not advisable for a beginning:  one should begin an hour earlier with a cup of thick, oil-less cocoa."  Nietzsche, F.; Ecce Homo.; "Why I am so Clever".-->
</body>
</html>
