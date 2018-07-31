<?php
session_start();
include('./dbconfig.php');
ini_set('display_errors', 0);

switch ((int) $_POST['cmd']) {
    case 0:
        if(empty($_POST['id']) || empty($_POST['pw'])){
            die('<script>alert("empty!"); history.go(-1);</script>');
        } else {
            $id = $_POST['id'];
            $pw = $_POST['pw'];
            
            $id = addslashes($id);
            $id = stripslashes($id);
            $id = mysqli_real_escape_string($conn, $id);
            $pw = addslashes($pw);
            $pw = stripslashes($pw);
            $pw = mysqli_real_escape_string($conn, $pw);

            $pw = hash('sha512', $pw);

            $query = "select * from user where id = '$id' and pw = '$pw'";
            $row = mysqli_fetch_assoc($mysqli->query($query));

            $_SESSION['name'] = $row['name'];

            if($row){
                die('<script>alert("login complete"); location.href="../mypage.php";</script>');
            } else {
                die('<script>alert("login failed");</script>');
            }
        }
    break;
    case 1:
        if(empty($_POST['id'])){
            die('<script>alert("empty!"); history.go(-1);</script>');
        } else {
            $id = $_POST['id'];
            $pw = $_POST['pw'];
            $name = $_POST['name'];
            $pw_re = $_POST['pw_re'];

            $name = addslashes($name);
            $name = stripslashes($name);
            $name = mysqli_real_escape_string($conn, $name);
            $id = addslashes($id);
            $id = stripslashes($id);
            $id = mysqli_real_escape_string($conn, $id);
            $pw = addslashes($pw);
            $pw = stripslashes($pw);
            $pw = mysqli_real_escape_string($conn, $pw);
            $pw_re = addslashes($pw_re);
            $pw_re = stripslashes($pw_re);
            $pw_re = mysqli_real_escape_string($conn, $pw_re);

            $pw = hash('sha512', $pw);
            $pw_re = hash('sha512', $pw_re);

            if($pw != $pw_re){
                die('<script>alert("retype password!");</script>');
            }
            $query = "select id from user where id = '$id'";
            $row = mysqli_fetch_assoc($mysqli->query($query));
            if($row){
                die('<script>alert("existing account!"); location.href="../login.php";</script>');
            } 

            $query1 = "insert into user(name, id, pw) values('$name', '$id', '$pw')";
            $mysqli->query($query1);
            die('<script>alert("complete"); location.href="../login.php";</script>');
        }
    break;
}
?>