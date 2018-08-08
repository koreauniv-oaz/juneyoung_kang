<?php
session_start();
include('./dbconfig.php');
ini_set('display_errors', 0);

switch ((int) $_POST['cmd']) {
    case 0: //작성제출하기
        if(empty($_POST['title']) || empty($_POST['content'])){
            die('<script>alert("empty"); history.go(-1);</script>');
        } else {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $title = addslashes($title);
            $title = stripslashes($title);
            $title = mysqli_real_escape_string($conn, $title);
            $content = addslashes($content);
            $content = stripslashes($content);
            $content = mysqli_real_escape_string($conn, $content);

            $query = "insert into board(title, content) values('$title', '$content')";
            $mysqli->query($query);
            die('<script>alert("complete"); location.href="../index.php";</script>');
        }
    break;
    case 1: //수정제출하기
        if(empty($_POST['title']) || empty($_POST['content'])){
            die('<script>alert("empty"); history.go(-1);</script>');
        } else {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $idx = $_POST['idx'];

            $title = addslashes($title);
            $title = stripslashes($title);
            $title = mysqli_real_escape_string($conn, $title);
            $content = addslashes($content);
            $content = stripslashes($content);
            $content = mysqli_real_escape_string($conn, $content);

            $query = "update board set title='$title', content='$content' where idx='$idx'";
            $mysqli->query($query);
            die('<script>alert("modified"); location.href="../index.php";</script>');
        }
    break;
    case 2: //삭제하기
        $idx = $_POST['idx'];
        $query = "delete from board where idx='$idx'";
        $mysqli->query($query);
        die('<script>alert("deleted"); location.href="../index.php";</script>');
    break;
}
?>