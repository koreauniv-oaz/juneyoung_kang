<?php
include('include/dbconfig.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">제목</th>
      <th scope="col">내용</th>
      <th scope="col">작성일</th>
    </tr>
  </thead>
  <tbody>
<?php
    $query = mq("select * from board order by idx asc");
    while($row = $query->fetch_array()){
?>
    <tr>
      <th scope="row"><?php echo $row['idx'];?></th>
      <td><a href="contents.php?idx=<?php echo $row['idx'];?>"><?php echo $row['title'];?></a></td>
      <td><?php echo $row['content'];?></td>
      <td><?php echo $row['log'];?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<a href="write.php">작성하기</a>
</body>
</html>