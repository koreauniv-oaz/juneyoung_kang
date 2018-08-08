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
<h3><?php echo $row['title'];?></h3>    
<p><?php echo $row['log'];?></p>
<p><?php echo $row['content'];?></p>
<form action="include/multi.php" method="post">
<input type="hidden" name="cmd" value="2">
<input type="hidden" name="idx" value="<?php echo $idx;?>">
<button>삭제하기</button>
</form>
<a href="modify.php?idx=<?php echo $idx;?>">수정하기</a>
</body>
</html>