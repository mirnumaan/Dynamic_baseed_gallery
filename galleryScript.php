<html>
<head>
<link rel="stylesheet" href="picStyle.css" />

</head>
<body>

<?php

$image = $_GET['picture'];

echo "<img class='bigPic' src='".$image."'>";

?>
<!-- inline css tag for keeping the text in the middle -->

<h1 style="text-align:center"><a href="./index.php">Gallery</a></h1>
</body>
</html>