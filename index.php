<html>
<head>
<link rel='stylesheet' href='picStyle.css' />
</head>
<body>

<?php
$filelist = glob("./pics/*");

foreach($filelist as $filename){
	echo "<div><img src='".$filename."'></div><br>";
}
?>

</body>
</html>
