<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$time = time() - strtotime("today");

	function trim_video_time($video_duration)
	{
		$time = time() - strtotime("today");
		$a = round($time / $video_duration);
		//echo $time."<br>".($a * $video_duration);
		//echo $time - ($a * $video_duration);
		return strval($video_duration - (($a * $video_duration) - $time));
	}
// 3783s - Flash FM (GTA VC)
	$time = time() - strtotime("today");
	echo trim_video_time(3783);
	echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/o9GZjPd78hg?rel=0&autoplay=1&start='. trim_video_time(3783) .'" frameborder="0" allowfullscreen></iframe>';

?>
</body>
</html>