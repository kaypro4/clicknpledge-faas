<?php
require_once('inc/config.inc');

$msg = "The following error occured:\n\n";
$msg .= rawurldecode($_GET['err']) . "\n";
$msg .= rawurldecode($_GET['on']);

mail(ERROR_EMAIL_TO,ERROR_EMAIL_SUBJECT,$msg);
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
Error<br/><br/>
<?php
 echo rawurldecode($_GET['err']);
 echo rawurldecode($_GET['on']);
?>
</body>
</html>
