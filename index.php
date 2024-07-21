<html>
<head>
<link rel='stylesheet' href='picStyle.css' />
</head>
<body>

<div class="galleryDiv">

<?php
$filelist = glob("./pics/*");

foreach($filelist as $filename){
	echo "<a href='galleryScript.php?picture=".$filename."'><img class='galleryPic' src='".$filename."'></a>";
}
?>

</div>
</body>
</html> 