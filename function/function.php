<?
function loadmoviemeta($cat,$total){
	$db=mysql_connect("localhost","root","root");
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("moviesite", $db);
	$sql=("SELECT * FROM movies WHERE movietype=0 ORDER BY ".$cat." DESC limit ".$total);
	$movie=mysql_query($sql);
	$count=0;				
	while($row = mysql_fetch_array($movie))
	{

		if ($count%6==5)		
		echo "<div class='movie last'>\n";
		else
		echo "<div class='movie'>\n";

		echo	"<div class='movie-image'>";
		echo	"<a href='play.php?id=".$row['movieid']."'><span class='play'><span class='name'>".$row['moviename']."</span></span><img src=".$row['moviepic']." alt='movie' /></a></div>\n";
		echo	"<div class='rating'><p>RATING</p><div class='stars'><div class='stars-in' style='width:".($row['movierate']*12)."px'>";
		echo	"</div></div>\n<<span class='comments'>".$row['moviecomments']."</span></div></div>\n";
	
		$count=$count+1;

	 }
	mysql_close($db);
}
?>
