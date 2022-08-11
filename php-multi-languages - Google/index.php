<html>
<head>
<title>Google Cloud Translate</title>
</head>
<body>

<?php

	// https://cloud.google.com/translate/docs/languages
	require_once ('vendor/autoload.php');
	use \Statickidz\GoogleTranslate;

	$text = 'Hello World';
	$english = 'en';
	$urdu = 'ur';
	$dutch = 'nl';
	
	$trans = new GoogleTranslate();
	$result = $trans->translate($english, $urdu, $text);

	echo '<h2>'.$result.'</h2>';
?>

</body>
</htmL>