<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Name of Your Library</title>
<script src="js/menu.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/highcharts.js"></script> 
<link REL="SHORTCUT ICON" HREF="<!-- Add your website icon address here -->"> 
<link href="shelves.css" rel="stylesheet" type="text/css" />
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
    <td>
		<h1 align="center" class="heading"><img src="/akml/gfx/kmlheader.png" width="830" height="51" alt="Welcome" /></h1>
    </td>
  </tr>
  <tr>
    <td><p align="center"><a href="/akml/"><img border="0" src="/akml/gfx/home.png" onmouseover="this.src='/akml/gfx/home2.png';" onmouseout="this.src='/akml/gfx/home.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/search.php"><img border="0" src="/akml/gfx/search.png" onmouseover="this.src='/akml/gfx/search2.png';" onmouseout="this.src='/akml/gfx/search.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/akml/admin/"><img border="0" src="/akml/gfx/admin.png" onmouseover="this.src='/akml/gfx/admin2.png';" onmouseout="this.src='/akml/gfx/admin.png';" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<!-- Add your website address here -->"><img border="0" src="/akml/gfx/online.png" onmouseover="this.src='/akml/gfx/online2.png';" onmouseout="this.src='/akml/gfx/online.png';" /></a></p>
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
<div>	  
      </p><p align="center"><img src="/akml/gfx/about5.png" width="460" height="54" alt="about the Library" /></p>
      <table align="center" width="759" border="0">
        <tr>
          <td width="200" height="300"><img src="gfx/hk.jpg" width="196" height="255" /></td>
          <td width="589">
            Enter a description of your library here.
			</td>
			</tr>
			</table>
			<table align="center">
			<tr>
			<td width="7%" height="300"></td>
			<td width="31%" height="300"><img src="gfx/hwaet.jpg" width="160" height="135" /></td>
			<td></td>
			<td width="31%"><h3>Statistics</h3>
            <li><strong>Collection Total: </strong>
			<li><strong>Percent Entered: </strong>
			<li><strong>Total Entered: </strong><?php  	 
include('req.php');
include('bank.php');
$result = mysql_query('SELECT COUNT(*) AS id_count FROM library');
$row = mysql_fetch_assoc($result);
$count = $row['id_count'];
echo $count;
?>
            <li><strong>Total Pages Entered: </strong><?php  	 
$result = mysql_query('SELECT SUM(pages) AS pages_sum FROM library');
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>
            <li><strong>Hardbound : </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE bind='Hardbound'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>
            <li><strong>Paperback : </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE bind='Paperback'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>	
<br><br><br>
</ul>
			</td>
			<td width="31%"><h3>Genres</h3>
				<li><strong><font size="2">Literature: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('LIT')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>	
            <li><strong><font size="2">Philosophy: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('PHI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Secondary: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('CLI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Classics: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('CLA')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Non-Fiction: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('NON')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">History: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('HST')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Poetry: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('POE')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Science: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('SCI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Theater: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('THE')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
            <li><strong><font size="2">Children's: </strong><?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('CHL')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?></font>
			</td></tr>
</div>
</table>
<p></p>
<table align="center"><tr align="center">
	<td align="center"><div id="chart1" style="width:400px; height:400px;"><script>
	$(function () {
    $('#chart1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: true
        },
        title: {
            text: 'Genres'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Percent of Total',
            data: [
                ['Classics',   <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('CLA')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Literature',       <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('LIT')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
				['Secondary',       <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('CLI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['History',     <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('HST')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Non-Fiction',     <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('NON')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Philosophy',    <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('PHI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Poetry',     <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('POE')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Science',   <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('SCI')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
				['Theater',   <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE ggenre IN ('THE')");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>]
            ]
        }]
    });
});
	</script></div></td><td align="center"><div id="chart2" style="width:400px; height:400px;"><script>
	$(function () {
    $('#chart2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: true
        },
        title: {
            text: 'Pages By Genre'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Percent of Total',
            data: [
                ['Classics',   <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='CLA'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
                ['Literature',       <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='LIT'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
				['Secondary',    <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='CLI'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],				
				['History',    <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='HST'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],             
				['Non-Fiction',    <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='NON'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],             
                ['Philosophy',    <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='PHI'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
                ['Poetry',     <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='POE'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
                ['Science',   <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='SCI'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
				['Theater',   <?php  	 
$result = mysql_query("SELECT SUM(pages) AS pages_sum FROM library WHERE ggenre='THE'");
$row = mysql_fetch_assoc($result);
$sum = $row['pages_sum'];
echo $sum;
?>],
            ]
        }]
    });
});
	</script></div></td></tr>
	<tr><td align="center"><div id="chart3" style="width:400px; height:400px;"><script>
	$(function () {
    $('#chart3').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: true
        },
        title: {
            text: 'Pages by Binding'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Percent of Total',
            data: [
                ['Paperback',   <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE bind='Paperback'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
                ['Hardbound',       <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE bind='Hardbound'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
            ]
        }]
    });
});
	</script></div></td>
	<td align="center"><div id="chart4" style="width:400px; height:400px;"><script>
	$(function () {
    $('#chart4').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1,//null,
            plotShadow: true
        },
        title: {
            text: 'Top Languages'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Percent of Total',
            data: [
                ['English',   <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE lang='English'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
				['German',    <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE lang='German'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],				
				['Greek',    <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE lang='Greek'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],
				['French',    <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE lang='French'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],      
				['Latin',    <?php  	 
$result = mysql_query("SELECT COUNT(bind) AS bind_count FROM library WHERE lang='Latin'");
$row = mysql_fetch_assoc($result);
$sum = $row['bind_count'];
echo $sum;
?>],  
            ]
        }]
    });
});
	</script></div></td></tr></table>	
	<table width="700" align="center">
		<tr><td><td> 
		<h3>Technical</h3>
				Add technical details about your installation here. <br /><br />
			<h3>Terms</h3>
				Add your use terms here.
			</td><td></td>
	</tr></table><table><tr>
	<center><br /><br />
	<a href="about.php"><img src="gfx/kmlfooter.jpg" alt="KML Footer" width="238" height="25" border="0" /></a>
	 </center></tr>
	</table>
	<p align="left">&nbsp;</p></td>
	</tr>
	</table>
<h1 align="center" class="heading">&nbsp;</h1>
<!-- "In a climate that is very provocative, tea is not advisable for a beginning:  one should begin an hour earlier with a cup of thick, oil-less cocoa."  Nietzsche, F.; Ecce Homo.; "Why I am so Clever".-->
</body>
</html>
