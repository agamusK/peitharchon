<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Name of Your Library</title>
<script src="/akml/js/menu.js" type="text/javascript"></script>
<link href="/akml/shelves.css" rel="stylesheet" type="text/css" />
<link REL="SHORTCUT ICON" HREF="<!-- Add your website icon address here -->"> 
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

	<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="1000" border="0">
		<tr>
			<td><h1 align="center" class="heading"><img src="/akml/gfx/kmlheader.png" width="830" height="51" alt="Welcome" /></h1>
			  <p align="center"><a href="/akml/"><img border="0" src="/akml/gfx/home.png" onmouseover="this.src='/akml/gfx/home2.png';" onmouseout="this.src='/akml/gfx/home.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/"><img border="0" src="/akml/gfx/back.png" onmouseover="this.src='/akml/gfx/back2.png';" onmouseout="this.src='/akml/gfx/back.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/search.php"><img border="0" src="/akml/gfx/search.png" onmouseover="this.src='/akml/gfx/search2.png';" onmouseout="this.src='/akml/gfx/search.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/about.php"><img border="0" src="/akml/gfx/about.png" onmouseover="this.src='/akml/gfx/about2.png';" onmouseout="this.src='/akml/gfx/about.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/admin/index.php"><img border="0" src="/akml/gfx/admin.png" onmouseover="this.src='/akml/gfx/admin2.png';" onmouseout="this.src='/akml/gfx/admin.png';" /></a></p>
			  <p align="center">
	<table align="center" border=\"0\" width=\"100%\">
		<tr align="center" style="background-color:#222">
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
	<table align="center" border=\"0"\ width=\"100%"\ cellpadding="20" >
		<tr>
			<td>
			  <?php
			  
				include('inc/req.php');
				include('inc/bank.php');
				
				//check if result exists in url and is not blank
				if(isset($_GET['result']) && trim($_GET['result']) != ''){
				$get_result = trim($_GET['result']);
				
				//use the trimmed result and create a variable			    
				$query = "SELECT * FROM library WHERE ref='" . mysql_real_escape_string($get_result) . "'";

				$resource = mysql_query($query,$link);

				if(!$resource){
				die('Could not get data: ' . mysql_error());
				}

				while($result=mysql_fetch_assoc($resource)){
				$ref = $result['ref'];
				//$title = $result['title'];

				echo "<img align='center' src='http://covers.openlibrary.org/b/isbn/".$ref."-L.jpg'/>";
				}
				
				echo "</td><td>";
			  	
				$query = "SELECT * FROM library WHERE ref='" . mysql_real_escape_string($get_result) . "'";
				
				$resource=mysql_query($query,$link);
				echo "
				<table class=\"sortable\" align=\"center\" border=\"0\" width=\"100%\">	 ";
				while($result=mysql_fetch_array($resource))
				{ 
				echo "<tr><h2>".$result[1]." </h2></tr><tr><h3>".$result[2]." </h3></tr><tr><h3>".$result[8]."</h3></tr><tr><td><b>KML Location:</b></td><td>".$result[21]."</td></tr><tr><td><b>Total Pages:</b></td><td>".$result[15]."</td></tr><tr><td><b>Publication Year:</b>&nbsp;&nbsp;&nbsp;</td><td>".$result[9]."</td></tr><tr><td><b>Publisher:</b></td><td>".$result[10]."</td></tr><tr><td><b>ISBN:</b></td><td>".$result[3]."</td></tr><tr><td><b>Binding:</b></td><td>".$result[12]."</td></tr><tr><td><b>Language:</b></td><td>".$result[16]."</td></tr><tr><td><b>Genre:</b></td><td>".$result[17]."</td></tr><tr><td><b>Id. #:</b></td><td>".$result[0]."</td></tr><tr><td><b>Translator:</b></td><td>".$result[19]."</td></tr><tr><td><b>Comments:</b></td><td>".$result[25]."</td></tr>";
				} echo "<tr><td>&nbsp;</td></tr></table>";
				
				mysql_close($link);
				} else {
				//show an error, redirect, anything you desire
				die('result is not set in url');
				}
				
			  ?>
			</td>
		</tr>
	</table>
	<br /><br /><br /><br />
    <center>
		<a href="about.php"><img src="/akml/gfx/kmlfooter.jpg" alt="Hwaet! Productions" width="238" height="25" border="0" /></a>
	</center>
    <p align="left">&nbsp;</p>
	</td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<!-- "In a climate that is very provocative, tea is not advisable for a beginning:  one should begin an hour earlier with a cup of thick, oil-less cocoa."  Nietzsche, F.; Ecce Homo.; "Why I am so Clever".-->
</body>
</html>
