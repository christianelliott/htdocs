<div id="stories">
<?php
$story = null;

if(isset($_GET['story'])){ $story = $_GET['story']; } //Gathering the specific story id if applicable

if ( $story != null ) { //Pulling the specified story based on the passed id
$data = mysql_query("SELECT * FROM post WHERE pid = $story") or die(mysql_error());
$post = mysql_fetch_array( $data );
PRINT "<div id='postholder'><div id='title'>".$post['title'] . "</div><div id='storycontent'>".$post['content'] . "</div></div>";

} else { //Displaying the front page
PRINT "	<h2>Most Active</h2>";
$data = mysql_query("SELECT * FROM post") or die(mysql_error());
while($post = mysql_fetch_array( $data ))
{
	$score = $post['stat']; // Determining the score of the individual post to determine which color the div should be.
if ( $score >= 25 ) {
	PRINT "<div id='postholder-".$post['pid'] . "'><div id='title-red'><span><a href='index.php?story=".$post['pid'] . "'>".$post['title'] . "</a></span></div><div id='content'><div id='content-box'><div id='source'><span><a href='".$post['source'] . "'>Placeholder</a></span></div>".$post['content'] .  "</div></div></div> " . "\n";
	}
elseif ( $score >= 10 && $score < 25) {
	PRINT "<div id='postholder-".$post['pid'] . "'><div id='title-orange'><span><a href='index.php?story=".$post['pid'] . "'>".$post['title'] . "</a></span></div><div id='content'><div id='content-box'><div id='source'><span><a href='".$post['source'] . "'>Placeholder</a></span></div>".$post['content'] .  "</div></div></div> " . "\n";
	}
elseif ( $score >= 5 && $score < 10) {
	PRINT "<div id='postholder-".$post['pid'] . "'><div id='title-yellow'><span><a href='index.php?story=".$post['pid'] . "'>".$post['title'] . "</a></span></div><div id='content'><div id='content-box'><div id='source'><span><a href='".$post['source'] . "'>Placeholder</a></span></div>".$post['content'] .  "</div></div></div> " . "\n";
	}
else {
	PRINT "<div id='postholder-".$post['pid'] . "'><div id='title-green'><span><a href='index.php?story=".$post['pid'] . "'>".$post['title'] . "</a></span></div><div id='content'><div id='content-box'><div id='source'><span><a href='".$post['source'] . "'>Placeholder</a></span></div>".$post['content'] .  "</div></div></div> " . "\n";
	}
}
}

?>
</div>