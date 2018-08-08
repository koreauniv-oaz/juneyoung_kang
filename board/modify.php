<?php
include("include/dbconfig.php");
$idx = $_GET['idx'];
$query = "select * from board where idx='$idx'";
$row = mysqli_fetch_array($mysqli->query($query));
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
<form action="include/multi.php" method="post">
<input type="hidden" name="cmd" value="1">
<input type="hidden" name="idx" value="<?php echo $idx;?>">
<input type="text" placeholder="title" name="title" value="<?php echo $row['title'];?>">
<textarea name="content"><?php echo $row['content'];?></textarea>
<button>수정하기</button>
</form>
</body>
</html>