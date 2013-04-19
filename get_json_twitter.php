<html>
	<head>
		<title>60C T jSon</title>
	</head>
	<body>
		<form ENCTYPE='multipart/form-data' ACTION='index.php' method='POST' name='fichier'>
			<p>
				<strong>@twitterpseudo : </strong><input value="soixanteci" name='username' type='text' id='twitterConnect' />
			</p>
			<input type=SUBMIT VALUE='GO' name='twitterConnect'>
		</form>
		<div>
<?php

	$username       = $_POST["username"];

	if ($username != '') {
		$url            = 'https://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name='.$username.'&count=1';
		$urlContent     = file_get_contents($url);
		$jsonUrlContent = json_decode($urlContent, true);
	
		echo $url;
		echo '<br /><br />';
		echo '<br />- '.$jsonUrlContent[0]["created_at"];
		echo '<br />- '.$jsonUrlContent[0]["id"];
		echo '<br />- '.$jsonUrlContent[0]["id_str"];
		echo '<br />- '.$jsonUrlContent[0]["text"];
		echo '<br />- '.$jsonUrlContent[0]["source"];
		echo '<br />- '.$jsonUrlContent[0]["user"]["name"];
	}

?>
		</div>
	</body>
</html>
